<!DOCTYPE html>
<html lang="en-US">

<head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <title>
        <?php
if (is_front_page()):
    echo 'Front Page';
else:
    echo wp_title('');
endif;
?>
    </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>

</head>

<body>

    <nav>
        <div class="nav-logo">
        <a href="<?php echo get_home_url(); ?>">
                    your logo
                </a>
        </div>

                <div class="hamburger-cont">
                    <!-- font-awes class is dadded in app.js -->
                    <i class="menu-btn fas "></i>
                </div>


        <div class="nav-menu">
            <?php
$menuParameters = array(
    'theme_location' => 'nav-menu-location',
    'container' => false,
    'echo' => false,
    'items_wrap' => '%3$s',
    'depth' => 0,
);

echo strip_tags(wp_nav_menu($menuParameters), '<a>');
?>
        </div>

        <div class="nav-menu-mobile">
            <?php
                $menuParameters = array(
                    'theme_location' => 'nav-menu-location',
                    'container' => false,
                    'echo' => false,
                    'items_wrap' => '%3$s',
                    'depth' => 0,
                );

                echo strip_tags(wp_nav_menu($menuParameters), '<a>');
                ?>
        </div>



    </nav>