document.addEventListener('DOMContentLoaded', function () {
    // Hacer una solicitud al backend para obtener las autorizaciones médicas
    fetch('backend.php')
        .then(response => response.json())
        .then(data => {
            // Manejar los datos recibidos y actualizar la interfaz de usuario
            const tableBody = document.querySelector('#autorizaciones-body');

            data.forEach(autorizacion => {
                const row = document.createElement('tr');
                row.innerHTML = `<td>${autorizacion.id_autorizacion}</td>
                                 <td>${autorizacion.fecha_solicitud}</td>
                                 <td>${autorizacion.tipo_tratamiento}</td>
                                 <td>${autorizacion.descripcion}</td>
                                 <td>${autorizacion.estado}</td>
                                 <td>${autorizacion.fecha_aprobacion || '-'}</td>`;
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error al obtener las autorizaciones médicas:', error));
});
