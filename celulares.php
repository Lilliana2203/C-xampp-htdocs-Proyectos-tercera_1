<!DOCTYPE html>
<html lang="Spanish">
<head>
  <meta charset="UTF-8">
  <title>Celulares</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <?php include 'includes/header.php'; ?>
  <main>
  <section class="intro-section">
    <h1 class="gradient-title"> 📱 Celulares</h1>
    <p>Bienvenida a la sección de celulares. Aquí podrás explorar los modelos disponibles y comparar características.</p>
  </section>
  <main>
  <section class="accordion-section">
    <h2>Explora por categoría</h2>

    <details class="accordion-item">
      <summary>Mejores celulares 2025</summary>
      <div>
        <p>Modelos destacados por cámara, batería y rendimiento.</p>
      </div>
    </details>

    <details class="accordion-item">
      <summary>Información general</summary>
      <div>
        <p>Diferencias entre Android y iOS, consejos de compra.</p>
      </div>
    </details>

    <details class="accordion-item">
      <summary>Celulares para estudiantes</summary>
      <div>
        <p>Opciones económicas con buen rendimiento para clases y tareas.</p>
      </div>
    </details>

    <details class="accordion-item">
      <summary>Celulares para fotografía</summary>
      <div>
        <p>Modelos con cámaras avanzadas, sensores múltiples y estabilización.</p>
      </div>
    </details>
  </section>
<section class="carousel-section">
  <h2>🔥 Articulos en descuento</h2>
  <div class="carousel-container">
    <button class="carousel-btn prev">&#10094;</button>
    <div class="carousel-track">
      <div class="carousel-item">
        <img src="img/laptop-gamer.jpg" alt="Laptop Gamer">
        <h3>Laptop Gamer</h3>
        <p>Antes: ₡1.200.000<br>Ahora: ₡899.000</p>
      </div>
      <div class="carousel-item">
        <img src="img/silla-gamer.png" alt="Silla Gamer">
        <h3>Silla Gamer</h3>
        <p>Antes: ₡250.000<br>Ahora: ₡179.000</p>
      </div>
      <div class="carousel-item">
        <img src="img/celular.jpeg" alt="Celular en oferta">
        <h3>Celular</h3>
        <p>Antes: ₡450.000<br>Ahora: ₡349.000</p>
      </div>
      <div class="carousel-item">
        <img src="img/audifonos.jpg" alt="Audífonos Bluetooth">
        <h3>Audífonos Bluetooth</h3>
        <p>Antes: ₡80.000<br>Ahora: ₡59.900</p>
      </div>
    </div>
    <button class="carousel-btn next">&#10095;</button>
  </div>
</section>
  </main>

  <footer class="main-footer">
    <div class="footer-content">
      <p>&copy; 2025 Electronics Store. Todos los derechos reservados.</p>
      <p>Diseñado por Alejandra para el proyecto de clase.</p>
    </div>
  </footer>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector('.carousel-track');
    const items = document.querySelectorAll('.carousel-item');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');
    let index = 0;

    function updateCarousel() {
      const width = items[0].getBoundingClientRect().width;
      track.style.transform = `translateX(-${index * width}px)`;
    }

    nextBtn.addEventListener('click', () => {
      index = (index + 1) % items.length;
      updateCarousel();
    });

    prevBtn.addEventListener('click', () => {
      index = (index - 1 + items.length) % items.length;
      updateCarousel();
    });

    window.addEventListener('resize', updateCarousel);
    updateCarousel();
  });
</script>
</body>
</html>