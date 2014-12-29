// Change Login Logo
function custom_login_logo() {
    echo '<style type="text/css">
        h1 a { 
          background-image:url(/images/logo.png) !important; 
          width:##px !important;
          height:##px !important;
          background-size:##px !important;
            -webkit-background-size:##px;}
      
      /* Change Background Color */
        body {
            background-color:##F;
        }
        
        /* hide back and forgot password */
        #backtoblog {
            display:none;
        }
        #nav {
            display:none;
        }
    </style>';
}
add_action('login_head', 'custom_login_logo');

// Change Logo link to homepage
function login_logo_url_home() {
    return home_url( '/');
}

// Change rollover name to blog name
function new_login_title() {
    return get_option('blogname');
}

add_filter( 'login_headerurl', 'login_logo_url_home' );
add_filter('login_headertitle', 'new_login_title');
