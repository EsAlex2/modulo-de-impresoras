<div>
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
        <div class="container">
          <div class="container-lg">
            <h5 style="text-align: center; padding: 22px 0 0 0;">Numero de Licencias a Imprimir</h5>
            <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search..."
              style="width: 50%; margin: 20px " />
          </div>
          <div class="card-body">
            <div class="row g-3">
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead class="table-light">
                    <th>Grado de Licencias</th>
                    <th>Años de Vigencia</th>
                    <th>Estatus</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $gradosDelLicencia[2]}}</td>
                      <td>10 años</td>
                      <td><span class="badge bg-label-primary me-1">En Proceso</span></td>
                    </tr>
                    <tr>
                      <td>{{ $gradosDelLicencia[3] }}</td>
                      <td>5 años</td>
                      <td><span class="badge bg-label-success me-1">Completado</span></td>
                    </tr>
                    <tr>
                      <td>{{ $gradosDelLicencia[4] }}</td>
                      <td>10 años</td>
                      <td><span class="badge bg-label-warning me-1">Pendiente</span></td>
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
  <!--<button wire:click="cargarImpresora" class="btn btn-primary">Cargar Impresora</button >--->
</div>