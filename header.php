<!DOCTYPE html>
<?php  
/**
 * [header.php] - Document Head
 *
 * @link(blank, https://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29)
 * @author Richard Blondet <richardblondet@gmail.com>
 * @package marcadordo
 * 
 * When developing a Theme
 * - Use the proper DOCTYPE.
 * - The opening <html> tag should include language_attributes().
 * - The <meta> charset element should be placed before everything else, including the <title> element.
 * - Use bloginfo() to set the <meta> charset and description elements.
 * - Use wp_title() to set the <title> element. See why.
 * - Use Automatic Feed Links to add feed links.
 * - Add a call to wp_head() before the closing </head> tag. Plugins use this action hook to add their own scripts, stylesheets, and other functionality.
 * - Do not link the theme stylesheets in the Header template. Use the wp_enqueue_scripts action hook in a theme function instead.
 */

/**
 * Here's an example of a correctly-formatted HTML5 compliant head area:
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	    <head>
	        <meta charset="<?php bloginfo( 'charset' ); ?>" />
	        <title><?php wp_title(); ?></title>
	        <link rel="profile" href="http://gmpg.org/xfn/11" />
	        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	        <?php wp_head(); ?>
	    </head>
 */
$authors = <<<AUTHORS
<!--
*|==============================
*| Design:
*| 	Yuriko Sone
*|  yurikosone@gmail.com
*|
*| Frontend Development: 
*| 	Richard Blondet 
*| 	richardblondet@gmail.com
*|
*| Backend Development:
*| 	Ronny Baez
*|  ronnie.baez@gmail.com
*|==============================
-->\n
AUTHORS;
printf($authors); ?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Font-family START -->
    <!-- 
    	Usage: 
    	font-family: 'Roboto', sans-serif;

    	Using the icons in HTML:
	 	<i class="material-icons">face</i>
	 	link: http://google.github.io/material-design-icons/#getting-icons
	-->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Roboto:300,400,700" rel="stylesheet">
    <!-- Font-family END -->
	<!-- Bootstrap Libray -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css?id=5d472e23c7e390b505e8dd6606f3a9ce">
	<!-- Stylesheet START -->
	<link rel="stylesheet" href="style.css" />
	<!-- Stylesheet END -->

	<!-- TESTING -->
	<script type="text/javascript" src="assets/js/sidebar-menu.js"></script>
	<script type="text/javascript" src="assets/js/sidebar-nav-submenu.js"></script>

	<title>Marcdor.do</title>
</head>
<!-- Wrapper -->
<div id="wrapper" class="">
	
	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li>
				<a href="#" class="sidebar-bar-close">
					<span class="sidebar-icon">
						<i class="material-icons md-light md-24 close-mc">close</i>
						<i class="material-icons md-light md-24 menu-mc">menu</i>
					</span>
				</a> 
			</li>
			<li id="sidebar-search-toggle" sidebar-nav-submenu class>
				<a href="#buscar"> 
					<span class="sidebar-icon">
						<i class="material-icons md-light md-24">search</i>
					</span>
					<span class="sidebar-menu-item">
						Buscar
					</span>
				</a>
				<ul class="sidebar-nav-submenu">
					<li>
						<!-- Sidebar Search Form -->
						<div id="sidebar-search-form">
							<form action="/" method="get">
								<div class="row">
									<div class="col-xs-9">
										<input type="text" class="form-control input-lg" name="s">
									</div>
									<div class="col-xs-3">
										<button type="submit" class="btn btn-search btn-block btn-lg">
											<i class="material-icons md-light md-24">search</i>
										</button>
									</div>
								</div>
							</form>
						</div>
						<!-- #Sidebar Search Form -->
					</li>
				</ul>
			</li>		
			<li sidebar-nav-submenu class>
				<a href="#" class="">
					<span class="sidebar-icon">
						<i class="material-icons md-light md-24">motorcycle</i>
					</span>
					<span class="sidebar-menu-item">
						Deportes
					</span>
				</a> 
				<ul class="sidebar-nav-submenu">
					<li>
						<a href="#besibol">Beisbol</a>
					</li>
					<li>
						<a href="#baloncesto">Baloncesto</a>
					</li>
					<li>
						<a href="#futbol">Futbol</a>
					</li>
					<li>
						<a href="#boxeo">Boxeo</a>
					</li>
					<li>
						<a href="#voleibol">Voleibol</a>
					</li>
					<li>
						<a href="#nascar">Nascar</a>
					</li>
					<li>
						<a href="#nfl">NFL</a>
					</li>
					<li>
						<a href="#tenis">Tenis</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<span class="sidebar-icon">
						<i class="material-icons md-light md-24">play_circle_outline</i>
					</span>
					<span class="sidebar-menu-item">
						Videos
					</span>
				</a> 
			</li>
			<li>
				<a href="#">
					<span class="sidebar-icon">
						<i class="material-icons md-light md-24">star</i>
					</span>
					<span class="sidebar-menu-item">
						Favoritos
					</span>
				</a> 
			</li>
			<li>
				<a href="#" class="sidebar-show-more">
					<span class="sidebar-icon">
						<i class="material-icons md-light md-24">more_horiz</i>
					</span>
					<span class="sidebar-menu-item">
						Más
					</span>
				</a> 
			</li>
		</ul>
	</div>
	<!-- /#sidebar-wrapper -->

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<!-- Navbar -->
		<nav class="navbar navbar-default navbar-static-top navbar-marcador">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand navbar-menu-btn">
						<i class="material-icons md-light">menu</i>
					</a>
					<a class="navbar-brand" href="#">
						<img id="logo" src="assets/imgs/logo.png" height="24" width="130" alt="logo">
					</a>
				</div>
			</div>
		</nav>
		<!-- /.navbar-marcador -->
		
	</div>
	<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->