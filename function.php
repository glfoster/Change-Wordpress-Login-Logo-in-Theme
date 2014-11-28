      // Change Logo

function change_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/you-site-logo.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

      //Change the a tag surrounding the logo to your sites homepage

function login_logo_url_home() {
    return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url_home' );

function login_logo_url_home_name() {
    return 'Site Name';
}
add_filter( 'login_headertitle', 'login_logo_url_home_name' );
