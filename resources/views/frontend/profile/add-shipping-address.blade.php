@extends('frontend.layouts.app')

@section('title', 'Billing | Swiss Caviarlieri')
@section('header', 'Billing | Swiss Caviarlieri')

@section('content')
    @livewire('frontend.shipping-address-form', ['addressNumber' => $addressNumber])
@endsection
