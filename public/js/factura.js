document.getElementById('form-factura').addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    const data = {
        cliente: {
            identificacion: formData.get("cliente_identificacion"),
            nombres: formData.get("cliente_nombres"),
            apellidos: formData.get("cliente_apellidos"),
            direccion: formData.get("cliente_direccion"),
            telefono: formData.get("cliente_telefono")
        },
        mesero: {
            id: parseInt(formData.get("mesero_id")),
            nombres: formData.get("mesero_nombres")
        },
        mesa: {
            numero: parseInt(formData.get("mesa_numero")),
            nombre: formData.get("mesa_nombre")
        },
        platos: [
            {
                plato: formData.get("platos[0][plato]"),
                valor: parseFloat(formData.get("platos[0][valor]"))
            },
            {
                plato: formData.get("platos[1][plato]"),
                valor: parseFloat(formData.get("platos[1][valor]"))
            }
        ]
    };

   fetch('https://restaurantecomidastipicasdelsur-production.up.railway.app/api/Factura/crear', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(async response => {
        const mensaje = await response.text();
        if (!response.ok) throw new Error(mensaje);
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: mensaje,
                confirmButtonText: 'Aceptar'
            });
        this.reset();
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se pudo registrar la factura. ' + error.message,
            confirmButtonText: 'Intentar de nuevo'
        });
    console.error(error.message);
    });

});