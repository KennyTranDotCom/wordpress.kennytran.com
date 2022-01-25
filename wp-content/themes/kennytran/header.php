<!DOCTYPE html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <meta name="description" content="">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
