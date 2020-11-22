<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    wp_head();
    ?>
</head>
<body>
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <p class="h5 my-0 mr-md-auto fw-normal">
        <?php
            if(function_exists('the_custom_logo')){
                the_custom_logo();
            }
        ?>
    </p>
    <?php
    wp_nav_menu(
        array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul class="my-2 my-md-0 mr-md-3 navbar">%3$s</ul>'
        )
    )
    ?>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
</header>
