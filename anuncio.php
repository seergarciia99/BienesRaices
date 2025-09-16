<?php  
require 'includes/funciones.php';
incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Casa en Venta frente al bosque</h1>
      <picture>
        <source srcset="build/img/destacada.webp" type="image/webp" />
        <source srcset="build/img/destacada.jpg" type="image/jpeg" />
        <img
          src="build/img/destacada.jpg"
          alt="Imagen de la propiedad"
          loading="lazy"
        />
      </picture>

      <div class="resumen-propiedad">
        <p class="precio">3000000</p>

        <ul class="iconos-caracteristicas">
          <li>
            <img
              class="icono"
              src="build/img/icono_wc.svg"
              alt="icono wc"
              loading="lazy"
            />
            <p>3</p>
          </li>
          <li>
            <img
              class="icono"
              src="build/img/icono_estacionamiento.svg"
              alt="icono estacionamiento"
              loading="lazy"
            />
            <p>3</p>
          </li>
          <li>
            <img
              class="icono"
              src="build/img/icono_dormitorio.svg"
              alt="icono habitaciones"
              loading="lazy"
            />
            <p>4</p>
          </li>
        </ul>

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
