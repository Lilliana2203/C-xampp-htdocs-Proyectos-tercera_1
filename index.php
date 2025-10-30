<?php require_once 'vistas/vista_superior.php'; ?>

<main>
<section class="intro-section">
  <h1>Bienvenido a <span>Electronics Store</span></h1>
  <p>
    Explora nuestra selección de productos tecnológicos pensados para cada tipo de usuario. Desde celulares y computadoras hasta tablets, smartwatches y accesorios, aquí encontrarás información clara, imágenes detalladas y enlaces directos para conocer más sobre cada categoría.
  </p>
  <p>
    ¿No sabes qué dispositivo elegir? Cada sección incluye una breve reseña para ayudarte a tomar la mejor decisión. ¡Haz clic en “Mostrar más...” en cada tarjeta y descubre lo que tenemos para ti!
  </p>
</section>

  <section class="card-list"></section>
  <section class="comment-section">
  <h2>Deja tu comentario</h2>
  <form class="comment-form">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required />

    <label for="comentario">Comentario:</label>
    <textarea id="comentario" name="comentario" rows="5" required></textarea>

    <button type="submit">Enviar</button>
  </form>

  <div class="comment-list">
    <!-- Aquí se mostrarán los comentarios -->
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
  document.querySelector('.comment-form').addEventListener('submit', function(e) {
    // ...
  });
</script>

<script src="script/cards.js"></script>
<?php require_once 'vistas/vista_inferior.php'; ?>
<script>
  document.querySelector('.comment-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const nombre = document.getElementById('nombre').value.trim();
    const comentario = document.getElementById('comentario').value.trim();

    if (nombre && comentario) {
      const commentList = document.querySelector('.comment-list');
      const newComment = document.createElement('p');
      newComment.innerHTML = `<strong>${nombre}</strong>: ${comentario}`;
      commentList.appendChild(newComment);

      // Limpiar campos
      document.getElementById('nombre').value = '';
      document.getElementById('comentario').value = '';
    }
  });
</script>