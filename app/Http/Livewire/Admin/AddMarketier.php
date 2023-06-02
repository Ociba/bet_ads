<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Modules\Marketiers\Entities\Marketier;
use LivewireUI\Modal\ModalComponent;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AddMarketier extends ModalComponent
{
    public $contact;
    public $name;
    public $email;
    public $password;
    public $user_type;
    public $user_id;
    public $marketier_name;

    //validate category
    protected $rules = [
        'contact'       => 'required',
        'email'         => 'required',
        'password'      => 'required',
        'marketier_name'          => 'required',
    ];

    /**
     * customizing the validation messages
     */
    protected $messages = [
        'contact.required' => 'Contact unit is required',
        'email.required' => 'Email year is required',
        'password.required' => 'Password per semester is required',
        'marketier_name.required' => 'Name is required',
    ];

    public function render()
    {
        return view('livewire.admin.add-marketier');
    }
    /**
     * This function creates marketiers
     */
    public function submit()
    {
        $this->validate();
        $this->emit('Marketiers', 'refreshComponent');
        Marketier::addMarketier($this->marketier_name,$this->contact);
        $this->createAccount($this->name, $this->email, $this->user_type,$this->password);
        //activity()->log(auth()->user()->name.' Added a new Category called '.$this->category);
        $this->closeModal();
        Session::flash('msg', 'advert creation is successful');
    }
    /**
     * this function creates a user
     */
    private function createAccount($name, $email, $user_type,$password)
    {
        User::create([
            'name' => $this->marketier_name,
            'email' => $email,
            'user_type' => '2',
            'password' => Hash::make($password),
            //'profile_photo_path' => $current_photo,
        ]);
    }
}
