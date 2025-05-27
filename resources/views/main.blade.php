<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Menú Principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container py-5">
    <h1 class="mb-4 text-center">Menú de Consultas</h1>
    <div class="row g-4">

      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Total vendido por cada mesero</h5>
            <a href="{{ url('meseros') }}" class="btn btn-primary mt-3">Consultar</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Clientes con consumo mayor o igual al valor digitado</h5>
            <a href="{{ url('clientes/consumo') }}" class="btn btn-primary mt-3">Consultar</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Plato más vendido por mes</h5>
            <a href="{{ url('plato/mas-vendido') }}" class="btn btn-primary mt-3">Consultar</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Registro de factura</h5>
            <a href="{{ url('factura') }}" class="btn btn-success mt-3">Registrar</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
