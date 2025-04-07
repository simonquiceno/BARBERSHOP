@extends('layout')
@section('title', 'PRODUCTOS')
@section('content')
    <x-products-list :productos="$productos"></x-products-list>
@endsection