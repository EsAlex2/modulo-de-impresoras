<div class="container">
  <div class="col-lg-12" style="margin: 18px 0 15px 0;">
    <label class="card-header">Impresora con error</label>
    <select id="impresoraSelect" class="form-select">
      <option value="" disabled selected>Seleccione...</option>
      @foreach ($impresoras_automaticas as $id => $impresora)
        <option value="{{ $id }}">{{ $impresora }}</option>
      @endforeach
    </select>
  </div>
  <div class="col-lg-12" style="margin: 18px 0 15px 0;">
    <label class="card-header">Reintento de Impresion</label>
    <select id="impresoraSelect" class="form-select">
      <option value="" disabled selected>Seleccione...</option>
      @foreach ($impresoras_automaticas as $id => $impresora)
        <option value="{{ $id }}">{{ $impresora }}</option>
      @endforeach
    </select>
  </div>
  <hr>
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
  </div>

</div>
