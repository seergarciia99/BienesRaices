<?php  
require 'includes/funciones.php';
incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Guía para la decoración de tu hogar</h1>

      <p class="informacion-meta">Escrito el: <span>20/10/2025</span> por: <span>Admin</span></p>
      
      <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp" />
        <source srcset="build/img/destacada2.jpg" type="image/jpeg" />
        <img
          src="build/img/destacada2.jpg"
          alt="Imagen de la propiedad"
          loading="lazy"
        />
      </picture>

      <div class="resumen-propiedad">

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit iure
          unde quos totam eos laudantium dicta autem id. Consectetur, quibusdam
          eum? Sit, deserunt eligendi alias quos molestias aspernatur
          consectetur voluptatum!
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde atque
          sunt expedita reiciendis dolor eum, ipsa placeat aut rem illo eveniet
          ab! In mollitia vitae necessitatibus, distinctio quas delectus harum!
        </p>
      </div>
    </main>


<?php  
incluirTemplate('footer'); 
?>
