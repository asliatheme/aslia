<?php

/*
* Header file.
*
* @package Aslia
*
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class('aslia-body')?>>
    <?php 
        if(function_exists('wp_body_open')){
            wp_body_open();
        }
    ?>

<div id="page" class="site">
    <header id="mast-head" class="site-header" role="">
        <?php get_template_part('template-parts/header/nav'); ?>
    </header>
    <div id="content" class="site-content">
