<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tabla</title>
</head>
<style>
    body {
    background-color: #fce4ec; 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  h2 {
    color: #6a1b9a; 
    margin-bottom: 30px;
  }

  .table-container {
    background-color: #f3e5f5; 
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  .table {
    background-color: #f8f4ff; 
    border-radius: 12px;
    overflow: hidden;
  }

  .table th {
    background-color: #d1c4e9; 
    color: #4a148c;
    font-weight: bold;
  }

  .table td {
    background-color: #ffffff;
    color: #4a148c;
  }

  .btn-morado {
    background-color: #ba68c8;
    color: white;
    border: none;
    padding: 10px 24px;
    font-size: 16px;
    border-radius: 10px;
    transition: background-color 0.3s;
  }

  .btn-morado:hover {
    background-color: #9c27b0;
  }
</style>

<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Usuarios Registrados 💜</h2>
    
    <table class="table table-bordered table-striped" id="tabla-usuarios">
      <thead class="table-primary">
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>

    <div class="text-center">
      <a href="/Registro" class="btn-morado">Volver al Registro</a>
    </div>
  </div>

  <script>
    window.onload = function () {
      const usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];
      const tbody = document.querySelector("#tabla-usuarios tbody");

      usuarios.forEach((usuario, index) => {
        const fila = document.createElement("tr");
        fila.innerHTML = `
          <td>${index + 1}</td>
          <td>${usuario.nombre}</td>
          <td>${usuario.apellido}</td>
          <td>${usuario.correo}</td>
        `;
        tbody.appendChild(fila);
      });
    };
  </script>

</body>
</html>