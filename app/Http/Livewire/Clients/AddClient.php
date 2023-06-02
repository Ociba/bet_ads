<?php

namespace App\Http\Livewire\Clients;
use Modules\Clients\Entities\Client;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Session;
use App\Models\User;
use Hash;

class AddClient extends ModalComponent
{
    public $client_name;
    public $phone_number;
    public $name;
    public $email;
    public $user_type;
    public $password;
    public $clients_email;
    public $loggedin_marketier_id;

    //validate deposits
    protected $rules = [
        'client_name'       => 'required',
        'phone_number'      => 'required',
        'email'             => '',
        'clients_email'     => 'required',
        'password'          => 'required',
    ];

    /**
     * customizing the validation messages
     */
    protected $messages = [
        'client_name.required'  => 'Name of Client is required',
        'phone_number.required' => 'Phone Number is required',
        'clients_email.required' => 'Email is required',
        'password.required'     => 'Password is required',
    ];
    public function render()
    {
        return view('livewire.clients.add-client');
    }
    /**
     * This function creates clients for the marketier
     */
    public function submit()
    {
        $this->validate();

        $this->emit('MarketierClients', 'refreshComponent');
        
        $this->createAccount($this->name, $this->email, $this->user_type,$this->loggedin_marketier_id, $this->password);
        Client::addClient($this->client_name, $this->clients_email,$this->phone_number);
        $this->closeModal();
        Session::flash('msg', 'Client is successful created');
    }
    /**
     * this function creates a user
     */
    private function createAccount($name, $email, $user_type,$loggedin_marketier_id, $password)
    {
        User::create([
            'name' => $this->client_name,
            'email' => $this->clients_email,
            'user_type' => '3',
            'loggedin_marketier_id'=>auth()->user()->id,
            'password' => Hash::make($password),
        ]);
    }
}
