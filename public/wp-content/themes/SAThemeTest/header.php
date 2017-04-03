<?php
/**
 * Заголовок для нашей темы
 * 
 * Это шаблон, который отображает весь раздел <head> и все содержимое до  <div id = "content">
 * 
 * Подробнее об общих файлах шаблонов WordPress:
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package WordPress
 * @subpackage SAThemeTest
 * @since 1.0
 * @ Версия 1,0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="wrapper">
            <header>
                <?php get_search_form(); ?>
            </header>
            <nav class="main-navigation">
                <?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
            </nav>