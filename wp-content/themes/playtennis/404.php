<?php
/*
Template Name: 404
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>
<main class="main">
  <div class="wrapper">
    <div class="error-404__text-block">
      <h2 class="visually-hidden">Ошибка 404. Страница не найдена.</h2>
      <h3 class="error-404__title">Ой!</h3>
      <p class="error-404__text">Похоже, мы не можем найти эту страницу!</p>
      <p class="error-404__text">Но у нас есть много других.</p>
      <p class="error-404__link">
        <a class="main-button" href="<?php echo home_url(); ?>"> Вернуться на главную</a>
      </p>
    </div>
  </div>
</main>

<?php get_footer(); ?>
