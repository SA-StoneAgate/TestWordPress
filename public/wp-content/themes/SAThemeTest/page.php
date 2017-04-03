<?php
/**
 * Шаблон для отображения всех страниц
 * 
 * Это шаблон, который отображает все страницы по умолчанию.
 * Обратите внимание, что это конструкция страниц WordPress
 * И что другие «страницы» на вашем сайте WordPress могут использовать
 * Другой шаблон.
 *
 * Подробнее об общих файлах шаблонов WordPress:
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage SAThemeTest
 * @since 1.0
 * @ Версия 1, 0
 */
?>
<?php get_header(); ?>
<div class="main-heading">
    <h1><?php the_title(); ?></h1>
</div>
<section>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile;
    endif; ?>
</section>
<?php get_footer(); ?>


