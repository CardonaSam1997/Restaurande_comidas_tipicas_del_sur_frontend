<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Factura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Crear Factura</h2>

        <form id="facturaForm">
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

    <script>
        const form = document.getElementById('facturaForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Obtener datos del formulario
            const formData = new FormData(form);

            // Construir JSON con la estructura que espera la API
            const data = {
                cliente: {
                    identificacion: formData.get('cliente_identificacion'),
                    nombres: formData.get('cliente_nombres'),
                    apellidos: formData.get('cliente_apellidos'),
                    direccion: formData.get('cliente_direccion'),
                    telefono: formData.get('cliente_telefono')
                },
                mesero: {
                    idMesero: Number(formData.get('mesero_id')),
                    nombres: formData.get('mesero_nombres')
                },
                mesa: {
                    nroMesa: Number(formData.get('mesa_numero')),
                    nombre: formData.get('mesa_nombre')
                },
                platos: [
                    {
                        plato: formData.get('platos[0][plato]'),
                        valor: Number(formData.get('platos[0][valor]'))
                    },
                    {
                        plato: formData.get('platos[1][plato]'),
                        valor: Number(formData.get('platos[1][valor]'))
                    }
                ]
            };

            fetch('https://restaurantecomidastipicasdelsur-production.up.railway.app/api/Factura/crear', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    // Si usas Laravel y CSRF en la misma app, agregar token aquí:
                    // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (!response.ok) throw new Error('Error en la respuesta: ' + response.status);
                return response.json();
            })
            .then(result => {
                alert('Factura creada con éxito');
                form.reset();
            })
            .catch(error => {
                alert('Error al enviar la factura: ' + error.message);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
