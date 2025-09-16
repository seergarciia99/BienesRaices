<?php  
require 'includes/funciones.php';
incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
      <h1>Conoce sobre Nosotros</h1>
      <div class="contenido-nosotros">
        <div class="imagen">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp" />
            <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
            <img
              src="build/img/nosotros.jpg"
              alt="Sobre Nosotros"
              loading="lazy"
            />
          </picture>
        </div>

        <div class="texto-nosotros">
          <blockquote>25 Años de experiencia</blockquote>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
            nulla at cumque placeat rem, animi quaerat officia accusamus atque
            beatae recusandae dolorum repellendus nam modi ipsam unde veritatis
            illo expedita?
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
            ipsa sint tempora repellendus unde nam deleniti harum laboriosam in,
            voluptates voluptatibus commodi aliquid adipisci dolor? Dolorum
            veritatis nobis et ut!
          </p>
        </div>
      </div>
    </main>

      <section class="contendedor seccion">
      <h1>Más Sobre Nosotros</h1>

      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="Icono seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint,
            itaque debitis quis ab laborum eveniet nemo odit corrupti voluptatum
            consequatur dicta repellendus tempora totam, asperiores fuga quia
            reiciendis aspernatur at.
          </p>
        </div>

        <div class="icono">
          <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint,
            itaque debitis quis ab laborum eveniet nemo odit corrupti voluptatum
            consequatur dicta repellendus tempora totam, asperiores fuga quia
            reiciendis aspernatur at.
          </p>
        </div>

        <div class="icono">
          <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy" />
          <h3>A Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint,
            itaque debitis quis ab laborum eveniet nemo odit corrupti voluptatum
            consequatur dicta repellendus tempora totam, asperiores fuga quia
            reiciendis aspernatur at.
          </p>
        </div>
      </div>
    </section>


<?php  
incluirTemplate('footer'); 
?>
