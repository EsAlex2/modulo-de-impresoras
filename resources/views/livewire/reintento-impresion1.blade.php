<div class="container">
  <div class="col-lg-12" style="margin: 18px 0 15px 0;">
    <label class="card-header">Impresora con error</label>
    <select id="impresoraSelect" class="form-select">
      <option value="" disabled selected>Seleccione...</option>
      @foreach ( $impresoras_manuales as $id => $impresora )
      <option value="{{ $id }}">{{ $impresora }}</option>
      @endforeach
    </select>
  </div>
  <div class="col-lg-12" style="margin: 18px 0 15px 0;">
    <label class="card-header">Reintento de Impresion</label>
    <select id="impresoraSelect" class="form-select">
      <option value="" disabled selected>Seleccione...</option>
      @foreach ( $impresoras_manuales as $id => $impresora )
      <option value="{{ $id }}">{{ $impresora }}</option>
      @endforeach
    </select>
  </div>
  <div class="tableErrors" style="margin-top: 30px;">
    <h5 style="text-align: center;">Licencias con Errores</h5>
    <table class="table">
      <thead class="table-light">
        <th>Numero de Documento</th>
        <th>Grado de Licencia</th>
        <th>Fecha de Errores</th>
        <th>Estatus</th>
        <th><input class="form-check-input" type="checkbox" value="" id="defaultCheck1" /></th>
      </thead>
      <tbody>
        <tr>
          <td>{{ $numeroDocumentos[0] }}</td>
          <td>{{ $gradosDelLicencia[2] }}</td>
          <td>09-01-2026 02:17:30 PM</td>
          <td><span class="badge rounded-pill bg-label-danger">Error</span></td>
          <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1" /></td>
        </tr>
        <tr>
          <td>{{ $numeroDocumentos[1] }}</td>
          <td>{{ $gradosDelLicencia[3] }}</td>
          <td>03-01-2026 11:01:00 AM</td>
          <td><span class="badge rounded-pill bg-label-danger">Error</span></td>
          <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1" /></td>
        </tr>
        <tr>
          <td>{{ $numeroDocumentos[2] }}</td>
          <td>{{ $gradosDelLicencia[4] }}</td>
          <td>01-12-2025 07:50:24 PM</td>
          <td><span class="badge rounded-pill bg-label-danger">Error</span></td>
          <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1" /></td>
        </tr>
        <tr>
          <td>{{ $numeroDocumentos[3] }}</td>
          <td>{{ $gradosDelLicencia[5] }}</td>
          <td>05-01-2026 03:10:00 PM</td>
          <td><span class="badge rounded-pill bg-label-danger">Error</span></td>
          <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1" /></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
