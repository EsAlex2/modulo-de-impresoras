<div class="row">
  <div class="col-lg">
    <div class="">
      <div class="card" style="padding: 40px">
        <div class="card-header d-flex align-items-center justify-content-center">
          <h5>Recepcion de plastico</h5>
        </div>
        <form wire:submit.prevent="lotes">
          <div class="row mb-6">
            <small class="text-muted justify-content-center mb-6">Datos de quien recibe</small>
            <label class="col-sm-1 col-form-label" for="dni">Cedula</label>
            <div class="col-sm-5">
              <input type="search" class="form-control" id="dni" wire:model.live='dni'/>
              @error('dni')
                <span class="error">{{ $message }}</span>
              @enderror
            </div>
            <label class="col-sm-1 col-form-label" for="oficinaIntt">Oficina</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="oficinaIntt" value="{{ $funcionario[3] }}" disabled/>
            </div>
          </div>
          <div class="row mb-6">
            <label class="col-sm-1 col-form-label" for="nombres">Nombres</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="nombres" value="{{ $funcionario[1] }}" disabled/>
            </div>
            <label class="col-sm-1 col-form-label" for="apellidos">Apellidos</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="apellidos" value="{{ $funcionario[2] }}" disabled/>
            </div>
          </div>
          <div class="row mb-6">
            <label class="col-sm-1 col-form-label" for="nombres">Codigo de lote</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="nombres" value="{{ $funcionario[4] }}" disabled/>
            </div>
            <label class="col-sm-1 col-form-label" for="nombres">Fecha de Registro</label>
            <div class="col-sm-5">
              <input class="form-control" type="datetime-local"  id="html5-datetime-local-input" />
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-1">
              <button type="submit" class="btn btn-primary" wire:click="">Registrar</button>
            </div>
            <div class="col-sm-1">
              <button type="button" class="btn btn-label-secondary" data-bd-dismiss="form">Cancelar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
