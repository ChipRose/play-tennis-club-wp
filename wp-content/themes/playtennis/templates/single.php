<?php
/*
Template Name: post
Template Post Type: post, page, product
*/
?>

<?php get_header('navigation'); ?>
<main class="main">
  <section class="post">
    <div class="wrapper">
      <div class="wysiwyg-wrapper">
        <?php the_post();?>
        <time datetime="<?php the_modified_date('Y-m-d H:i');?>"><?php the_modified_date('j F Y');?></time>
        <h3><?php the_title();?></h3>
        <?php the_content();?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
