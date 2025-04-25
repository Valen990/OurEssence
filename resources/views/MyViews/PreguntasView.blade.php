<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Preguntas Frecuentes</title>
</head>
<style>
  body {
    background-color: #fce4ec; 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

    .accordion-title {
    text-align: center;
    font-size: 2rem;
    font-weight: bold;
    color: #6a1b9a; 
    margin-bottom: 20px;
    margin-top: 40px; 
    font-family: 'Arial', sans-serif;
  }

  .accordion-container {
    max-width: 800px;
    margin: 0 auto; 
  }

  .accordion-button {
    background-color: #ba68c8; 
    color: white;
    font-weight: bold;
  }

  .accordion-button:hover {
    background-color: #9c27b0; 
  }

  .accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(156, 39, 176, 0.5); 
  }

  .accordion-item {
    border-radius: 12px;
    margin-bottom: 10px;
    background-color: #f3e5f5; 
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .accordion-collapse {
    background-color: #f8f4ff; 
  }

  .accordion-body {
    color: #4a148c; 
  }
</style>

<body>
<div class="accordion-container">
  <h2 class="accordion-title">Preguntas Frecuentes</h2>
  
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          ¿Qué día y a qué hora son las clases?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body"> ¡Son todos los viernes de 2 a 4 pm! </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          ¿Cuál es su canal de comunicación?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Contamos con un canal de WhatsApp y un classroom por donde se suben los contenidos de las clases, sus grabaciones, el material y por supuesto las novedades.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          ¿En dónde se encuentran ubicadas?
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">En el bloque #6, salón 501 de nuestra institución Pascual Bravo.</div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>