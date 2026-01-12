<form wire:submit.prevent="saveImpresora">
  <!----------------------------------------------- OPCION 1 -------------------------------------------------------------->
  <div class="seleccionImpresoras">
    <select id="impresoraSelect" class="form-select" style="width: 95%; margin-top: 30px; margin-left: 20px;">
      <option value="" disabled selected>Seleccione una impresora</option>
      @foreach ($impresoras as $id => $impresora)
        <option value="{{ $id }}">{{ $impresora }}</option>
      @endforeach
    </select>
    <div class="LicenciasPorImprimir">
      <!---Rango de licencias a imprimir a nivel nacional por oficina---->
      <div class="col-lg-12">
        <div class="container" >
          <h5 style="text-align: center; padding: 25px 0 10px 0;">Numero de Licencias a Imprimir</h5>
          <div class="container justify-content-around" style="display: flex; margin: 10px;">
            <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search..."
              style="width: 70%;" wire:model.live='campo' />
              <button type="submit" class="btn btn-primary">Buscar Tramite</button>
          </div>
            @error('campo')
              <span class="error">{{ $message }}</span>
            @enderror
          <div class="card-body">
            <div class="row g-3">
              <div class="tableErrors">
                <h5 style="text-align: center; padding: 10px 0 10px 0;">Licencias para cargar</h5>
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" wire:click="">Cargar Impresora</button>
  </div>
</form>
