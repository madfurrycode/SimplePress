<?php
/**
 * Front Page Layout.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simplepress
 */

get_header();
?>
<section class="simple-hero-container">
  <div class="container">
    <h2 class="simple-hero-title">Welcome <span class="hero-brand"><?php bloginfo( 'name' ); ?></span></h2>
    <h4 class="simple-hero-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error iste suscipit omnis hic.</h4>
    <hr class="simple-hero-divider">
    <a href="#" class="btn btn-primary btn-simple">Learn More</a>
  </div>
</section>
	<div class="container page-content-container">
	  <div class="row">
	    <div class="col-lg-12">
	      <div id="primary" class="content-area">
	        <main id="main" class="site-main">
						<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/front-page', 'content' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
						?>
	        </main>
	      </div>
	    </div>
	  </div>
	</div>
<?php
get_footer();
