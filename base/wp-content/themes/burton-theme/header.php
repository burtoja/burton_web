<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>MVGS</title>

    <meta name="description" content="Mountain Vista Governor's School">

    <meta name="viewport" content="width=device-width">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="sticky-top">
    <div class="container">
        <a class="navbar-brand" href="http://www.mvgshome.org">
            <img class="img-fluid"
                 src="wp-content/themes/burton-theme/img/MVGS_Logo_transparent.png"
                 width="180"
                 height="20"
                 alt="Mountain Vista Governor's School">
        </a>
        <nav class="navigation-menu">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'navigation'
                )
            );
            ?>
        </nav>
    </div>
</header>





