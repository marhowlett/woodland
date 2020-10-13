<?php
    /* Template Name: Galeria */ 
    get_header();
?>
<section id="galeria" class="template-section">
<h2>GALERÍA</h2>
<p class="titulo">Nuestros proyectos terminados son nuestra tarjeta de presentación</p>
<div class="contenedor">
    <?php echo do_shortcode( '[grid_plus name="galeria2"]' ); ?>
</div>
</section>

<?php 
    get_footer();
?>
