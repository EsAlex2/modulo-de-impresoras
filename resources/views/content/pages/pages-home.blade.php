@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')

  <h4>Pagina Principal</h4>

  <livewire:paso1.recibir-lotes>

@endsection