<?php
/*
Template Name: page
Template Post Type: post, page, product
*/
?>

<?php
  $introPost = get_post( 87 );
  $addPost = get_post( 43 );
  $addressPost = get_post( 92 );

  function getPostContent($post) {
    $text = $post->post_content; 
    echo apply_filters('the_content', $text);
  }
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
  
  $groupsPosts = get_posts([ 'numberposts' => -1, 'category'=> 2]);
  $infoPosts = get_posts([ 'numberposts' => -1, 'category'=> 7]);
?>

<?php get_header(); ?>
<main class="main">
  <section class="intro">
    <div class="wrapper intro__wrapper">
      <a id="about"></a>
      <div class="wysiwyg-wrapper">
        <?php getPostContent($introPost); ?>
      </div>
    </div>
  </section>
  <section class="coach-info">
    <div class="wrapper">
      <a id="coach"></a>
      <div class="wysiwyg-wrapper">
        <?php getPostContent($addPost); ?>
      </div>
    </div>
  </section>
  <section class="groups">
    <div class="wrapper">
      <a id="groups"></a>
      <h2 class="main-title">Группы</h2>
      <div class="groups-slider">
        <div class="swiper-button-prev groups-slider__control" id="swiper-groups-button-prev">
          <span class="visually-hidden">К предыдущему слайду</span>
        </div>
        <div class="swiper-button-next groups-slider__control" id="swiper-groups-button-next">
          <span class="visually-hidden">К следующему слайду</span>
        </div>
        <div class="swiper groups-slider__images-block">
          <ul class="swiper-wrapper groups-slider__images-wrapper">
            <?php
            if( $groupsPosts ){
              foreach( $groupsPosts as $post ){
                setup_postdata( $post ); 
            ?>
            <li class="swiper-slide groups-slider__image-item">
              <div class="groups-slider__image-container">
                <?php the_post_thumbnail(); ?>
              </div>
            </li>
            <?php 
              }
            } else {
            ?>
            <p>Add some posts</p>
            <?php
            } wp_reset_postdata(); 
            ?>
          </ul>
          <div class="swiper-pagination groups-slider__pagination" id="swiper-groups-pagination"></div>
        </div>
        <div class="swiper groups-slider__descriptions-block">
          <ul class="swiper-wrapper groups-slider__description-wrapper">

            <?php
            if( $groupsPosts ){
              foreach( $groupsPosts as $post ){
                setup_postdata( $post ); 
            ?>
            <li class="swiper-slide groups-slider__description-item">
              <div class="wysiwyg-wrapper">
                <?php the_content(); ?>
              </div>
            </li>
            <?php 
              }
            } else {
            ?>
            <p>Add some posts</p>
            <?php
            } wp_reset_postdata(); 
            ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="news">
    <div class="wrapper">
      <a id="news"></a>
      <h2 class="main-title">Статьи</h2>
      <div class="swiper news-slider">
        <ul class="news-slider__list swiper-wrapper">
          <?php
            if( $infoPosts ){
              foreach( $infoPosts as $post ){
                setup_postdata( $post ); 
          ?>
          <li class="news-slider__item swiper-slide">
            <article class="post-preview">
              <div class="wysiwyg-wrapper">
                <p class="post-preview__date-block">
                  <time datetime="<?php the_modified_date('Y-m-d H:i');?>"><?php the_modified_date('j F Y');?></time>
                </p>
                <h3>
                  <?php the_title(); ?>
                </h3>
                <p><?php getExcerpt($excerptLength);?></p>
                <a href="<?php the_permalink();?>" class="more-link">Читать
                  далее</a>
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
        </ul>
        <div class="swiper-pagination news-slider__pagination" id="swiper-news-pagination"></div>
      </div>
      <p class="news__button">
        <a class="button-link" href="<?php echo get_permalink('123');?>">Все публикации</a>
      </p>
    </div>
  </section>
  <section class=" address">
    <a id="contacts"></a>
    <div class="wrapper">
      <div class="wysiwyg-wrapper">
        <h2>Адрес</h2>
        <?php getPostContent($addressPost); ?>
      </div>
    </div>
  </section>
  <section class="order">
    <div class="wrapper order__wrapper">
      <a id="order"></a>
      <h2>Заказать звонок</h2>
      <div class="order-form">
        <div class="wpcf7">
          <?php echo do_shortcode('[contact-form-7 id="31" title="Контактная форма" ]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
