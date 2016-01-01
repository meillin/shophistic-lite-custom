<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
    <![endif]-->

	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

   <!-- WP_Head -->
    	<?php wp_head(); ?>
   <!-- /WP_Head -->
</head>



<body <?php body_class(); ?>>

	<div id="wrap">

            <header id="header">
                <div class="infomration_banner">
                    <div class="col-sm-6 hidden-xs"><a href="#"><i class="fa fa-truck"></i> - Free shipping over 350dkk - save money, save environment</a></div>
                    <div class="col-sm-6">
                        <ul>
                            <li><a href="#"><i class="fa fa-pencil-square-o"></i> Blog</a></li>
                            <li><a href="#"><i class="fa fa-lightbulb-o"></i> Questions?</a></li>
                            <li><a href="#"><i class="fa fa-leaf"></i> Story</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="ql_logo_nav col-sm-6">

                            <div class="logo_container">
                                <a href="/"><?php get_template_part( "/templates/header-logo", "none" ); ?> </a>

                                <button id="ql_nav_btn" type="button" class="navbar-toggle collapsed">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div><!-- /logo_container -->
                            <div class="clearfix"></div>

                        </div><!-- col-md-8 -->

                        <?php
                        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                        ?>
                            <div class="login_cart_wrap col-sm-6">

                                <div class="ql_cart_wrap">
                                    <a href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" class="ql_cart-btn">
                                        <?php echo wp_kses_post( WC()->cart->get_cart_total() ); ?>
                                        <span class="count">(<?php echo esc_html( WC()->cart->cart_contents_count );?>)</span>
                                        <i class="ql-bag"></i><i class="ql-chevron-down"></i>
                                    </a>

                                    <div id="ql_woo_cart">
                                        <?php global $woocommerce; ?>

                                        <?php the_widget('WC_Widget_Cart');  ?>
                                    </div><!-- /ql_woo_cart -->
                                </div>
                                <div class="login_btn_wrap">
                                    <?php if ( is_user_logged_in() ) {
                                    global $current_user;
                                    get_currentuserinfo();
                                ?>
                                        <a class="ql_login-btn" href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>" title="<?php esc_attr_e( 'My Account', 'shophistic-lite' ); ?>">
                                            <span class="glyphicon glyphicon-user"></span>
                                            <?php esc_html_e( 'Hi '. $current_user->display_name, 'shophistic-lite' ); ?>
                                        </a>
                                     <?php }
                                     else { ?>
                                        <a class="ql_login-btn" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e( 'Login', 'shophistic-lite' ); ?>"><?php esc_html_e( 'Login', 'shophistic-lite' ); ?></a>
                                     <?php } ?>
                                </div>
                                <div class="clearfix"></div>


                                <div class="widget_search">
                                    <form role="search" method="get" class="search-form" action="/">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search" />
                                    </form>
                                </div>


                            </div><!-- col-md-4 -->
                        <?php } //if WooCommerce active ?>

                    </div><!-- row-->

                    <div class="row">
                        <div class="navbar-collapse" id="ql-navigation">
                            <span class="glyphicon glyphicon-remove navbar-close"></span>

                                <nav id="jqueryslidemenu" class="jqueryslidemenu navbar " role="navigation">
                                    <?php
                                    if ( has_nav_menu( 'menu-1' ) ){
                                            wp_nav_menu( array(
                                            'theme_location'  => 'menu-1',
                                            'depth'             => 3,
                                            'menu_class'        => 'nav navbar-nav',
                                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                            'walker'            => new wp_bootstrap_navwalker()
                                        ));
                                    }else{
                                        echo "<ul id='nav' class='nav navbar-nav'>";
                                        wp_list_pages( array(
                                            'title_li'     => ''
                                            )
                                        );
                                        echo "</ul>";
                                    };
                                    ?>
                                </nav>
                            </div>
                    </div>

                </div><!-- /container -->


            </header>

    <div class="clearfix"></div>