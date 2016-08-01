<?php  
/**
 * [front-page.php]
 *
 * The home page template.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @author  Richard Blonder <richardblondet@gmail.com>
 * @package marcadordo
 */
?>
<?php get_header(); ?>
<?php /* <!-- #marcador-navbar-submenu --> */ ?>
	<div id="marcador-navbar-submenu">
		<ul class="nav nav-pills">
			<li class="active">
				<a href="#noticias">Noticias</a>
			</li>
			<li>
				<a href="#virales">Virales</a>
			</li>
		</ul>
	</div>
	<?php /* <!-- /#marcador-navbar-submenu --> */ ?>
<!-- Marcador Hero Post -->
<div class="marcador-hero-post">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9 col-md-12 col-sm-12">
				<a class="marcador-hero-permalink" href="#hero-permalink">
					<header class="marcador-hero-unit" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/messi.jpg');">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-12">
									<div class="hero-heading">
										<h1 class="heading">
											Quam quae et sapiente ducimus vero velit autem temporibus, quos veniam, dicta fuga, tempora, reiciendis.
										</h1>
									</div>
								</div>
							</div>
						</div>
					</header>
				</a> 
			</div>
		</div>
	</div>
</div>
<!-- /.marcador-hero-post -->

<!-- Marcador Hero Post Score -->
<div class="marcador-hero-post score">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9 col-md-12 col-sm-12">
				<header class="marcador-hero-unit" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/messi.jpg');">
					<div class="hero-score">
						<div class="hero-score-wrapper">
							<div class="team-1">
								<div class="team-name">
									Barca
								</div>
							</div>
							<div class="score-marc">
								<div class="score-team-1">
									1
								</div>
								<div class="score-team-2">
									3
								</div>
								<div class="score-status">
									finalizado
								</div>
							</div>
							<div class="team-2">
								<div class="team-name">
									Real Madrid
								</div>
							</div>
						</div>
					</div>
				</header>
				<a href="#marcador-hero-permalink" class="marcador-hero-permalink">
					<div class="hero-heading">
						<h1 class="heading">
							Quam quae et sapiente ducimus vero velit autem temporibus,...
						</h1>
						<p class="excerpt">
							Secondary line text. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad praesentium cumque saepe odio, velit maxime sit laboriosam dolores.
						</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- /.marcador-hero-post.score -->


<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-lg-9">
			<!-- Marcador posts -->
			<div class="marcador-posts-listing-wrapper">
				<div class="container-fluid">
					<div class="row">
						<?php for ($i=0; $i <= 1; $i++): ?>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 marcador-post-list">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-4 col-sm-5 marcador-post-list-image-col">
											<a href="#post-permalink">
												<div class="marcador-post-list-image"></div>
											</a> 
										</div>
										<div class="col-xs-8 col-sm-7">
											<div class="marcador-post-list-content">
												<div class="marcador-post-list-category">
													<a href="#category-permalink">
														Tenis
													</a> 
												</div>
												<div class="marcador-post-list-title">
													<a href="#post-title-permalink">
														Temporada perfecta de los Warriors arruinada: Lebron e Irving dan título a Cleveland
													</a>
												</div>
												<div class="marcador-post-list-meta">
													<div class="marcador-post-list-author">
														<a href="#author-link">
															César Marchena
														</a>
													</div>
													<div class="marcador-post-list-date">
														<a href="#date-link">
															Jun 16, 2016
														</a> 
													</div>
													<!-- Conditional -->
													<div class="marcador-post-list-fav">
														<i class="material-icons">star</i>
													</div>
													<!-- end conditional -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> 
						<?php endfor; ?>
					</div>
				</div>
			</div>
			<!-- .marcador-posts-listing -->
		</div>
	</div>
</div>
<?php get_footer();; ?>