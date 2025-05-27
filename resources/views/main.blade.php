<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Panel de Control</h1>

    <div class="mb-3">
        <label class="form-label fw-bold">1. Total vendido por cada mesero</label><br/>
        <a href="http://localhost/Restaurande_comidas_tipicas_del_sur_frontend/public/meseros" class="btn btn-primary">Ir</a>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">2. Clientes con consumo mayor o igual al valor digitado</label><br/>
        <a href="http://localhost/Restaurande_comidas_tipicas_del_sur_frontend/public/clientes/consumo" class="btn btn-success">Ir</a>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">3. Plato más vendido, cantidad, monto total según el mes</label><br/>
        <a href="http://localhost/Restaurande_comidas_tipicas_del_sur_frontend/public/plato/mas-vendido" class="btn btn-warning">Ir</a>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">4. Crear factura</label><br/>
        <a href="http://localhost/Restaurande_comidas_tipicas_del_sur_frontend/public/factura" class="btn btn-danger">Ir</a>
    </div>
</div>

<!-- Bootstrap JS Bundle CDN (incluye Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
