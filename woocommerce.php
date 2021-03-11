<?php

/**
 * Template Name: page statique de base
 */
?>

<?php
get_header();
woocommerce_content();
?>

<div class="container">

<?php
the_content();
get_footer();
?>