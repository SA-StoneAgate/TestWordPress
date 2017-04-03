<?php
/**
 * Шаблон для отображения форм поиска в SAThemeTest
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

<form name="search" action="<?php echo home_url( '/' ) ?>" method="get" class="search-form">
	<input type="text" value="<?php echo get_search_query() ?>" name="s" placeholder="<?php echo __('Search', 'whitesquare'); ?>" class="input">
	<button type="submit" class="button"><?php echo __('GO', 'whitesquare'); ?></button>
</form>
