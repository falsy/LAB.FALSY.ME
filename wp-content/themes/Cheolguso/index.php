<?php
/* Template Name: cheoguso home page */
?>
<?php get_header(); ?>
<section id="page_content">
  <div class="container">
    <div class="col_box_full">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          get_template_part('template-parts');
        }
      }
      ?>
     </div>
  </div>
</section>
<?php get_footer(); ?>