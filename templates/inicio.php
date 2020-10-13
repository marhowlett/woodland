<?php
    /* Template Name: Inicio */ 
    get_header();
?>

<section id="slide" >
    <?php add_revslider('woodland2'); ?>
</section>


<section id="elegir" class="template-section">
<div class="contenedor">
   <h2>¿POR QUÉ ELEGIRNOS?</h2>
   <p class="titulo">Woodland le ofrece:</p>
   <div class="grid">
      <div class="col3"><img class="diseño" src="<?php echo get_stylesheet_directory_uri(); ?>/img/diseño.png" alt="diseño"><h3>DISEÑO</h3><p>Personalizado a
la medida de sus
necesidades</p></div>
       <div class="col3"><img class="calidad" src="<?php echo get_stylesheet_directory_uri(); ?>/img/calidad.png" alt="calidad"><h3>CALIDAD</h3><p>Nuestros muebles
tienen la misma calidad
que los de las tiendas
más exclusivas de 
México</p></div>
       <div class="col3"><img class="tiempos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tiempo.png" alt="tiempo"><h3>TIEMPOS DE ENTREGA</h3><p>Recibirá el mueble que
desea en el periodo
de tiempo establecido</p></div>
  <div class="col3"><img class="precio" src="<?php echo get_stylesheet_directory_uri(); ?>/img/precio.png" alt="precio"><h3>PRECIO</h3><p>Diseñaremos y
fabricaremos el
mueble de sus sueños
a un precio justo</p></div>
   </div>
   <div class="center">
   <a href="https:/woodlandhouse.mx/nosotros/"  class="btn"> <span>MÁS INFORMACIÓN</span></a>
   </div>
</div>
</section>
<section id="galeria" class="template-section">
<div class="contenedor">
   <h2>GALERÍA</h2>
   <p class="titulo">Nuestros proyectos terminados son nuestra mejor carta de presentación</p>
   <?php echo do_shortcode( '[grid_plus name="galeria"]' ); ?>
   <div class="center">
        <a href="https://woodlandhouse.mx/galeria/"  class="btn"> <span>IR A GALERIA</span></a>
   </div>
</div>
</section>

<section id="taller" class="template-section">

<div class="contenedor">
   <h2>TALLER BOUTIQUE</h2>
   <p class="titulo">Woodland le abre sus puertas</p>
    <div class="grid">
        <div class="col espe1"><iframe width="560" height="315" src="https://www.youtube.com/embed/fe_YLGxy2Hg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div class="col espe2">
            <p>Para nosotros es muy importante que cada cliente reciba el mueble que deseado. 
Creamos muebles funcionales y con increíbles diseños de acuerdo a su estilo. </p>
 
<p>Por esta razón lo recibiremos con mucho gusto en nuestro Taller Boutique.  Arquitectos, Diseñadores, Interioristas y clientes finales pueden vivir con nosotros la experiencia de diseñar su mueble a medida y ver su sueño convertido en realidad. </p>
 
<p>Si usted desea un diseño personalizado, le asesoraremos y pondremos nuestra experiencia a su disposición para juntos crear el mueble que tanto ha buscado. </p>
 
<p><strong>¡Visítenos en CDMX y sorpréndase con todos los beneficios que le ofrecemos!</strong></p>
            <div class="center">
            <a href="https://woodlandhouse.mx/taller/"  class="btn"> <span>SABER MÁS</span></a>
            </div>
        </div>
    </div>
</div>
</section>
    <section id="categoria" class="template-section">
<div class="contenedor">
   <h2 >CONOZCA NUESTRA TIENDA </h2>
   <p class="titulo">Encuentra lo que estás buscando</p>
  
    <?php echo do_shortcode('[vc_row woodmart_disable_overflow="1" css=".vc_custom_1496402498927{margin-bottom: 8vh !important;}" el_class="bg-bottom"][vc_column 0="" css=".vc_custom_1496220821354{padding-top: 0px !important;}"][woodmart_categories orderby="ID" order="ASC" style="masonry-first" spacing="20" number="5" ids="57, 58, 59, 60, 61" hide_empty="no" autoplay="no" lazy_loading="no"][/vc_column][/vc_row]'); ?>
   
   
</div>
</section>

<section id="testimonios" class="template-section">
<div class="contenedor">
   <h2>NUESTROS CLIENTES LO HAN COMPROBADO </h2>
  <p class="titulo">¡Somos su mejor opción!</p>
    <?php echo do_shortcode( '[elfsight_testimonials_slider id="1"]' ); ?>
   
    
</div>
</section>


<section id="blog" class="template-section">
<div class="contenedor">
   <h2>PUBLICACIONES RECIENTES</h2>
  <p class="titulo">Encuentre lo que está buscando</p>
    <?php echo do_shortcode( '[woodmart_blog blog_design="carousel" blog_carousel_design="small-images" blog_spacing="10" img_size="full" slides_per_view="2" scroll_per_page="yes" autoplay="yes" wrap="no" hide_pagination_control="no" hide_prev_next_buttons="no" parts_title="1" parts_meta="1" parts_text="1" parts_btn="1" lazy_loading="yes" scroll_carousel_init="no"]' ); ?>
   
    
</div>
</section>


<!--
<section id="contactopop" class="template-section">
<div class="contenedor">
    <div class="grid">
        <div class="col espe1"><?php echo do_shortcode('[caldera_form id="CF5f77849da51e1"]'); ?></div>
        <div class="col espe2"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/avion.png" alt="avion">
        <p>Déjanos un mensaje
<span>o escríbenos a...</span></p>
       <a href="">contacto@woodland.com.mx</a>
        </div>
    </div>
</div>
</section>
-->
<?php 
    get_footer();
?>
