@extends('layouts/layoutMaster')

@section('title', 'Opciones de Carga de Impresoras')

@section('vendor-script')
  @vite('resources/assets/vendor/libs/masonry/masonry.js')
@endsection

@section('content')
<!-- Examples -->
<h1>Opciones de Carga a Impresoras</h1>
<p>Seleccione una de las siguientes opciones para cargar las impresoras:</p>
<div class="row mb-12 g-6">
  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/11.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Impresion Manual</h5>
        <p class="card-text">
          <!--impresion manual-->
          Seleccione esta opcion para cargar las impresoras de forma manual.
        </p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exLargeModal">
          Seleccionar
        </button>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel4">Licencias Laminadas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <livewire:impresion-manual>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button wire:click="cargarImpresora" class="btn btn-primary">Cargar Impresora</button>
        </div>
      </div>
    </div>
  </div>

  <!----------------------------------------------- OPCION 2 Y 3 --------------------------------------------------------------->



  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/16.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Impresion Automatica</h5>
        <p class="card-text">
          Seleccione esta opcion para cargar las impresoras de forma automatica.
        </p>
        <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/10.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Reintento de Impresion</h5>
        <p class="card-text">
          Seleccione esta opcion para reintentar la impresion de licencias que hayan fallado.
        </p>
        <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
@endsection