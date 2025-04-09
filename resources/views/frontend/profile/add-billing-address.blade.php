@extends('frontend.layouts.app')

@section('title', 'Billing | Swiss Caviarlieri')
@section('header', 'Billing | Swiss Caviarlieri')

@section('content')
    @livewire('frontend.billing-address-form', ['customerId' => $customerId])
@endsection
