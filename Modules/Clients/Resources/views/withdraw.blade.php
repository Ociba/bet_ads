@extends('forms')

@section('content')

    @livewire('clients.withdraw',['withdraw_id'=>$withdraw_id])

@endsection