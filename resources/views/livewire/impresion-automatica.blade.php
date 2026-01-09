<div class="container">
  <div class="campos">
    <div class="seleccionImpresora">
      <label class="card-title">Seleccion de Impresoras</label>
      <select id="impresoraSelect" class="form-select" style="margin: 10px 0 30px 0">
        <option value="" disabled selected>Seleccionar Impresora</option>
        @foreach ($impresorasAutomaticas as $id => $impresora)
          <option value="{{ $id }}">{{ $impresora }}</option>
        @endforeach
      </select>
    </div>
    <div class="rangoPorOficinas">
      <label class="card-title">Oficinas INTT</label>
      <select id="impresoraSelect" class="form-select" style="margin: 10px 0 30px 0">
        <option value="" disabled selected>Seleccione la oficina</option>
        @foreach($oficinasINTT as $id => $oficina)
          <option value="{{ $id }}">{{ $oficina }}</option>
        @endforeach
      </select>
    </div>
    <div class="rangoNumerico">
        <label class="card-title">Cantidad de Licencias</label>
        <input type="number" class="form-control" placeholder="Indique la cantidad" style="margin: 10px 0 30px 0">
      </select>
    </div>
  </div>
</div>
