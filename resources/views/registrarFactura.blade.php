<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Factura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Crear Factura</h2>

        <form id="form-factura">
            @csrf

            <div class="card mb-3">
                <div class="card-header">Datos del Cliente</div>
                <div class="card-body row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Identificación</label>
                        <input type="text" name="cliente_identificacion" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nombres</label>
                        <input type="text" name="cliente_nombres" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Apellidos</label>
                        <input type="text" name="cliente_apellidos" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Dirección</label>
                        <input type="text" name="cliente_direccion" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Teléfono</label>
                        <input type="text" name="cliente_telefono" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">Datos del Mesero</div>
                <div class="card-body row g-3">
                    <div class="col-md-6">
                        <label class="form-label">ID Mesero</label>
                        <input type="number" name="mesero_id" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nombres</label>
                        <input type="text" name="mesero_nombres" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">Datos de la Mesa</div>
                <div class="card-body row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Número de Mesa</label>
                        <input type="number" name="mesa_numero" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="mesa_nombre" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">Platos</div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Plato 1</label>
                            <input type="text" name="platos[0][plato]" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Valor</label>
                            <input type="number" name="platos[0][valor]" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Plato 2</label>
                            <input type="text" name="platos[1][plato]" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Valor</label>
                            <input type="number" name="platos[1][valor]" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar Factura</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/factura.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
