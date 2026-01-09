<div class="container">
  <div class="campos">
    <div class="seleccionImpresora">
      <select id="impresoraSelect" class="form-select" style="margin: 35px 0 30px 0">
        <option value="" disabled selected>Seleccionar Impresora</option>
        @foreach ( $impresorasAutomaticas as $id => $impresora )
          <option value="{{ $id }}">{{ $impresora }}</option>
        @endforeach
      </select>
    </div>
    <div class="rangoPorOficinas">
      <select id="impresoraSelect" class="form-select" style="margin: 35px 0 30px 0">
      <option value="" disabled selected>Seleccionar Impresora</option>
      @foreach( $oficinasINTT as $id => $oficina)
      <option value="{{ $id }}">{{ $oficina }}</option>
      @endforeach
      </select>
    </div>
    <div class="rangoNumerico">
      <select id="impresoraSelect" class="form-select" style="margin: 35px 0 30px 0">
      <option value="" disabled selected>Seleccionar Impresora</option>
      @foreach( $licenciasPorOficina as $id => $licencias)
      <option value="{{ $id }}">{{ $licencias}}</option>
      @endforeach
      </select>
    </div>
  </div>
</div>
