<?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <p> <?php the_content(); ?> </p>
<?php }
?>
<div class="content-col pt-2 my-auto primary-font primary-color">
  <h1 class="pt-2">404</h1>
  <h3>Page not found</h3>
</div>
<div style="position:fixed;bottom:0;width:100%;">
  <?php
  get_footer();
  ?>
</div>