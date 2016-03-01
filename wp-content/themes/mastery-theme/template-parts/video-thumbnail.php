<?php
/**
 * The template part for displaying video thumbnails
 */
?>

<?php 
	the_title( 'Coming from template-parts: <h1 class="entry-title">', '</h1>' );
	?>
		<p>
	    <?php the_field('youtube-url'); ?>
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php printf( __( 'by %s', 'twentysixteen' ), get_the_author() ); ?>
			</a>
		</p>
	<?php
	
?>
