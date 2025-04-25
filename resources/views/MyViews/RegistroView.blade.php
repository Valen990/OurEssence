<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registrarse</title>
</head>
<style>
    * {
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f3e5f5; 
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 20px;
      border: 4px double #ab47bc; 
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 600px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      margin-bottom: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .form-button {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .form-button button {
      width: 48%;
      padding: 10px;
      border: none;
      border-radius: 10px;
      background-color: #ba68c8;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }

    .form-button button:hover {
      background-color: #9c27b0;
    }
  </style>

<body>
  <div id="registro">
    <form class="form-container" onsubmit="return validarFormulario()">
      <div class="mb-3">
        <label for="name" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="name">
      </div>

      <div class="mb-3">
        <label for="last_name" class="form-label">Apellido:</label>
        <input type="text" class="form-control" id="last_name">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Correo Institucional:</label>
        <input type="email" class="form-control" id="email">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="password">
      </div>

      <div class="form-button">
        <button type="button" class="btn btn-secondary" onclick="volverInicio()">Volver</button>
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </div>

      <div id="boton-ir-tabla" style="display: none; margin-top: 20px;">
        <button type="button" class="btn btn-success" onclick="irATabla()">Ver usuarios registrados</button>
      </div>

    </form>
  </div>

  <script>
    let contador = 1;
    function mostrarFormulario() {
      document.getElementById('inicio').style.display = 'none';
      document.getElementById('registro').style.display = 'flex';
    }

    function volverInicio() {
      document.getElementById('registro').style.display = 'none';
      document.getElementById('inicio').style.display = 'flex';
    }

    function validarFormulario() {
      const nombre = document.getElementById("name").value.trim();
      const apellido = document.getElementById("last_name").value.trim();
      const correo = document.getElementById("email").value.trim();
      const contraseña = document.getElementById("password").value;

      if (!nombre || !apellido || !correo || !contraseña) {
        alert("Por favor, completa todos los campos.");
        return false;
      }

      const correoValido = /^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
      if (!correoValido.test(correo)) {
        alert("Por favor, ingresa un correo válido.");
        return false;
      }

      if (contraseña.length < 6) {
        alert("La contraseña debe tener al menos 6 caracteres.");
        return false;
      }

      let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

      usuarios.push({ nombre, apellido, correo });

      localStorage.setItem("usuarios", JSON.stringify(usuarios));

      document.querySelector(".form-container").reset();

      alert("¡Registro exitoso!");

      irATabla();
      return false; 
    }
  </script>

<script>
    function volverInicio() {
        window.location.href = '/Inicio';
    }

    function irATabla() {
    window.location.href = '/Registros';
  }
</script>
  
</body>
</html>