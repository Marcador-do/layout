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

<!-- DESTROY -->
<?php echo "ERASE"; ?>
<div class="page-template-post-listing">
	<?php 	/**
		 * The WordPress Query class.
		 * @link http://codex.wordpress.org/Function_Reference/WP_Query
		 *
		 */
		$args = array(
			
			//Post & Page Parameters
			
			
			//Type & Status Parameters
			'post_type'   => 'post',
			'posts_per_page'=> 100,

		);
	
	$query = new WP_Query( $args );
	 ?>
		<!-- Marcador posts -->
		<?php if( $query->have_posts() ):  ?>
		<div class="marcador-posts-listing-wrapper">
			<div class="container-fluid">
				<div class="row">
					<?php while( $query->have_posts() ): $query->the_post(); ?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 marcador-post-list">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-4 col-sm-5 col-md-4 col-lg-2 marcador-post-list-image-col">
										<a href="<?php echo esc_url( get_permalink() ); ?>">
											<?php if( has_post_thumbnail( get_the_id()) ): ?>
												<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'full' ); ?>

											<?php endif; ?>
											<div class="marcador-post-list-image" style="background-image: url('<?php echo $image[0]; ?>') "></div>
										</a> 
									</div>
									<div class="col-xs-8 col-sm-7 col-md-8 col-lg-10">
										<div class="marcador-post-list-content">
											<?php 
				 								$categories = get_the_category();
												$category = $categories[0]->name; 
												$category_id = $categories[0]->term_id; // var_dump($categories[0]); 
											?>
											<?php if( count( $categories ) > 1 ): ?>
											<div class="marcador-post-list-category">
												<?php foreach ($categories as $cat => $cat_value):  ?>
													<?php if( $cat_value->slug != 'acento' ): ?>
													<a href="<?php echo esc_url( get_category_link( $cat_value->term_id ) ); ?>">
														<?php echo $cat_value->name; ?>
													</a>, 
													<?php endif; ?>
												<?php endforeach; ?>
											</div>
											<?php endif; ?>
											<div class="marcador-post-list-title">
												<a href="<?php echo esc_url( get_permalink() ); ?>">
													<?php the_title(); ?>
												</a>
											</div>
											<div class="marcador-post-list-meta">
												<div class="marcador-post-list-author">
													<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
														<?php echo get_the_author_meta( 'user_nicename' ); ?>
													</a>
												</div>
												<div class="marcador-post-list-date">
													<a href="#date-link">
														<?php the_date('M d, Y', '<i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;', ''); ?>
													</a> 
												</div>
												<!-- Conditional if favorite -->
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
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<!-- .marcador-posts-listing -->
	</div>
<!-- DESTROY -->
<pre>
	&lt;-- end here!!! --&gt;
</pre>
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

<div id="marcador-page-template" class="search">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 div col-sm-12 col-md-12 col-lg-12">
				<header class="page-header-template">
					<h2 class="page-title">
						Baloncesto
					</h2>
				</header>
			</div>
		</div>
	</div>
</div> 
<?php get_footer();; ?>