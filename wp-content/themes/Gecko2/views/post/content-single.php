<?php
/**
 * The template part for displaying single posts.
 * 
 * @since   1.0.0
 * @package Gecko
 */
?>
<?php do_action( 'jas_gecko_before_single_post' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( ! cs_get_option( 'blog-detail-title' ) ) {
			the_title( '<h1 class="post-title mg__0 fs__30">', '</h1>', true );

			echo '<div class="post-meta-inside flex mb__20">';
				jas_gecko_post_meta();
				jas_gecko_posted_on();
			echo '</div>';

			if ( has_post_thumbnail() ) {
				echo '<div class="post-thumbnail mb__20">';
					the_post_thumbnail();
				echo '</div>';
			}
		}
	?>	
	<div class="post-content">
		<?php
			the_content( sprintf(
				wp_kses_post( 'Continue reading %s', 'gecko' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
		?>
	</div>
</article><!-- #post-# -->
<?php do_action( 'jas_gecko_after_single_post' ); ?>