<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Plato más vendido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <h3 class="mb-4">Buscar plato más vendido por mes y año</h3>

    <form method="GET" action="{{ route('plato.masvendido') }}">
        <div class="row mb-3">
            <div class="col">
                <label for="mes" class="form-label">Mes</label>
                <input type="number" name="mes" id="mes" class="form-control" min="1" max="12" required>
            </div>
            <div class="col">
                <label for="anio" class="form-label">Año</label>
                <input type="number" name="anio" id="anio" class="form-control" min="2000" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Buscar</button>
    </form>

    @if(isset($platos) && count($platos) > 0)
        <h4 class="mt-5">Resultados</h4>
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Nombre Plato</th>
                    <th>Cantidad</th>
                    <th>Total Vendido</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($platos as $plato)
                <tr>
                    <td>{{ $plato['plato'] }}</td>
                    <td>{{ $plato['cantidadVendida'] }}</td>                    
                    <td>{{ $plato['totalFacturado'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @elseif(isset($error))
        <div class="alert alert-danger mt-4">{{ $error }}</div>
    @endif

</div>
</body>
</html>
