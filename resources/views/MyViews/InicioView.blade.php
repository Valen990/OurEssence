<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inicio</title>
</head>
  <style>
    body {
      background: linear-gradient(to right, #f3e5f5, #e1bee7);
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    .container-welcome {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 40px;
    }

    .card-welcome {
      background-color: white;
      border-radius: 20px;
      padding: 40px;
      max-width: 600px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      border: 4px double #ab47bc;
    }

    .title {
      font-size: 2rem;
      font-weight: bold;
      color: #6a1b9a;
      margin-bottom: 20px;
    }

    .description {
      font-size: 1.1rem;
      color: #4a148c;
      margin-bottom: 30px;
    }

    .btn-register {
      background-color: #ab47bc;
      border: none;
      padding: 12px 30px;
      font-size: 1rem;
      color: white;
      border-radius: 30px;
      transition: background-color 0.3s ease;
    }

    .btn-register:hover {
      background-color: #8e24aa;
    }

    #registro {
      display: none;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 20px;
      border: 4px double #ab47bc;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
    }

    .form-button {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .form-button button {
      width: 48%;
    }
  </style>
</head>

<body>
  <div class="container-welcome" id="inicio">
    <div class="card-welcome">
      <div class="title">SoftGirls 💜</div>
      <div class="description">
        Bienvenida a un espacio creado por y para chicas apasionadas por la tecnología y la programación. <br><br>
        📚 Clases semanales<br>
        🤝 Comunidad colaborativa<br>
        💻 Aprendizaje en conjunto<br>
        🌟 ¡Crecemos juntas!
      </div>
      <button class="btn btn-register" onclick="mostrarFormulario()">Registrarse</button>
    </div>
  </div>
</body>

<script>
    function mostrarFormulario() {
        window.location.href = '/Registro';
    }
</script>

</html>