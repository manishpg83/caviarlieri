@extends('layouts.admin')

@section('title', 'Admin Customers')
@section('header', 'Customers Management')

@section('content')
    @livewire('admin.customer.customer-list')
@endsection
