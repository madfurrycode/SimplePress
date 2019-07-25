<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simplepress
 */

?>

	</div><!-- #content -->
	<footer class="site-footer mt-5">
	  <div class="footer-widget-container">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-12 text-center-sm col-lg-4">
	          <?php dynamic_sidebar( 'footer-1' ); ?>
	        </div>
	        <div class="col-sm-12 text-center-sm col-lg-4">
	          <?php dynamic_sidebar( 'footer-2' ); ?>
	        </div>
	        <div class="col-sm-12 text-center-sm col-lg-4">
	          <?php dynamic_sidebar( 'footer-3' ); ?>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="site-info">
	    <span class="footer-credits container">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'simplepress' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'simplepress' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'simplepress' ), 'simplepress', '<i class="fas fa-heart icon-red mr-2"></i><a href="http://tristanelliott.co.za">Tristan Elliott</a>' );
					?>
	    </span>
	  </div>
	</footer>
</div><!-- #page -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>
</html>
