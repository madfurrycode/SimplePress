<article id="post-<?php the_ID(); ?>" class="front-page <?php post_class(); ?>">
  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'simplepress' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article>
