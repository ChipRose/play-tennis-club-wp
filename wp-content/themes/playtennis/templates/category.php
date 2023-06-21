<?php
/*
Template Name: category
Template Post Type: post, page, product
*/
?>

<?php
  $excerptLength=100;
  function theExcerptMaxCharlength( $charlength ){
    $excerpt = get_the_excerpt();
    $charlength++;
  
    if ( mb_strlen( $excerpt ) > $charlength ) {
      $subex = mb_substr( $excerpt, 0, $charlength - 5 );
      $exwords = explode( ' ', $subex );
      $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
      if ( $excut < 0 ) {
        echo mb_substr( $subex, 0, $excut );
      } else {
        echo $subex;
      }
      echo '...';
    } else {
      echo $excerpt;
    }
  }
  function getExcerpt ($charlength ) {
    if( has_excerpt( ) ) {
      echo get_the_excerpt();
    } else {
      theExcerptMaxCharlength($charlength);  
    }
  }
?>

<?php
  global $post;
  
  $infoPosts = get_posts([ 'numberposts' => -1, 'category'=> 7]);
?>

<?php get_header('navigation'); ?>
<main class="main">
  <section class="blog">

    <div class="wrapper">
      <h2 class="main-title">Все статьи</h2>
      <ul class="posts-list">
        <?php
        if( $infoPosts ) {
	        foreach( $infoPosts as $post ){
		        setup_postdata( $post ); 
        ?>
        <li class="posts-list__item">
          <article class="post-preview">
            <div class="wysiwyg-wrapper">
              <time datetime="<?php the_modified_date('Y-m-d H:i');?>"><?php the_modified_date('j F Y');?></time>
              <h3><?php the_title(); ?></h3>
              <p>
                <?php getExcerpt($excerptLength); ?>
                <a class="more-link" href="<?php the_permalink();?>">
                  Читать далее
                </a>
              </p>
            </div>
          </article>
        </li>
        <?php 
	      }
      } else {
        ?>
        <p>Add some posts</p>
        <?php
          } wp_reset_postdata(); 
        ?>
    </div>
    </ul>
  </section>
</main>
<?php get_footer(); ?>
