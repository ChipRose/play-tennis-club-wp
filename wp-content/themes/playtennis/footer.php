<footer class="footer">
  <div class="wrapper footer__wrapper">
    <ul class="social-list footer__social-list">
      <li class="social-list__item"><a href="<?php the_field('vk-link'); ?>" class=" link">
          <svg width="30" height="17" role="img" aria-label="Иконка VK" focusable="false">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#vk-icon"></use>
          </svg></a></li>
      <li class="social-list__item">
        <?php
          $logo_img = '';
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          
          if( $custom_logo_id ){
            $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
              'class'    => 'custom-logo',
              'itemprop' => 'logo',
            ) );
          }
          
          echo $logo_img;
        ?>
      </li>
      <li class="social-list__item"><a href="<?php the_field('wa-link'); ?>" class="link"><svg width="30" height="30"
            role="img" aria-label="Иконка VK" focusable="false">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#wa-icon"></use>
          </svg></a></li>
    </ul>
    <a href="https://chiprose.github.io/Portfolio/" class="copyright">&#169; Yana Rozova for Play Теннис</a>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
