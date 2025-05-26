<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes por Consumo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <h3 class="mb-4">Buscar clientes por consumo</h3>

    <form method="GET" action="{{ route('clientes.consumo') }}">
        <div class="mb-3">
            <label for="valor" class="form-label">Valor Consumo</label>
            <input type="number" name="valor" id="valor" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    @if(isset($clientes))
        <h4 class="mt-5">Resultados</h4>
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Identificacion</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente['identificacion'] }}</td>
                    <td>{{ $cliente['nombres'] }}</td>
                    <td>{{ $cliente['apellidos'] }}</td>
                    <td>{{ $cliente['direccion'] }}</td>
                    <td>{{ $cliente['telefono'] }}</td>                    
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
