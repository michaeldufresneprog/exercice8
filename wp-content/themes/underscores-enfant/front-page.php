<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>
	<p>Je suis modifié par le front-page .php</p>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			/*
		
			$the_query = new WP_Query( array( 'category_name' => 'devoir' ) );
			if ( $the_query->have_posts() ) {
    			while ( $the_query->have_posts() ) {
       				 $the_query->the_post();
        				echo get_the_title();
    				}
			} 
			else {
				echo "no found";
			}
			wp_reset_postdata();
			*/
			the_post();
			$query = new WP_Query( array( 'category_name' => "devoir" ) );
			if ( $query->have_posts() ) {
    			while ( $query->have_posts() ) {
						$query->the_post();
						echo '<h1>' . get_the_title() .  '</h1>';
						echo '<p>' . the_excerpt(0) . '</p>';
    				}
			} 
			else {
				echo "no found";
			}
			wp_reset_postdata();
			//get_template_part( 'template-parts/content', 'page-acc' );
			//echo get_the_title();
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
