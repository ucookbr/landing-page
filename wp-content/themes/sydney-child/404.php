<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Sydney
 */

get_header(); ?>

	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! A página não pôde ser encontrada.', 'sydney' ); ?></h1>
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/uploads/404-app.png' ); ?>" alt="<?php esc_attr_e( '404', 'sydney' ); ?>">
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Parece que nossos cozinheiros sem barreiras não encontraram esse conteúdo. Vamos tentar uma busca?', 'sydney' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
