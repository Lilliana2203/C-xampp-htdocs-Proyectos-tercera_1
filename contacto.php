<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <main>
    <section class="intro-section">
      <h1 class="gradient-title">📬 Contáctanos</h1>
      <p>¿Tienes dudas, sugerencias o comentarios? Completa el formulario y te responderemos pronto.</p>
    </section>

    <section class="contact-section">
      <form class="contact-form" action="#" method="post">
        <label for="nombre">Nombre completo</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo" required>

        <label for="asunto">Asunto</label>
        <input type="text" id="asunto" name="asunto" required>

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

        <button type="submit">Enviar mensaje</button>
      </form>
    </section>
  </main>

  <footer class="main-footer">
    <div class="footer-content">
      <p>&copy; 2025 Electronics Store. Todos los derechos reservados.</p>
      <p>Diseñado por Alejandra para el proyecto de clase.</p>
    </div>
  </footer>
</body>
</html>