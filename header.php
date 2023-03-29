<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--meta description-->

        <meta name="description" content="Why Pomodoro is effective, Pomodoro,
        Pomodoro technique, Pomodoro timer, Francesco Cirillo,">
        

        <!--Title img-->
        <link rel="icon" type="png" href="/wp-content/themes/pomodoro-theme/assets/images/P.png">

        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;800&display=swap" rel="stylesheet">
        

        <?php
        wp_head();
        ?>
    </head>
    <body>
        <div class="header">
            <div class="logo"><a href="Pomodoro.html"> <?php echo get_bloginfo( 'name' ) ?> </a></div>

            <div class="menu-links">
                <?php
                    wp_nav_menu( 
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="">%3$s</ul>'
                        )
                        );
                ?>
            </div>
    
            <div class="signup">
                <button id="signupbtn" onclick="signupbtn()">Sign Up</button>
            </div>
        </div>