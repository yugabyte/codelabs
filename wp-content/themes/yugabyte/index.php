<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();

$NUM_CARDS_PER_ROW = 3;
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="entry entry-highlight">
				<header class="entry-header">
					<h2 class="entry-title">What is this site about?</h2>
				</header>

				<div class="entry-content">
					<p>
						This site contains relevant, hands-on tutorials about topics related to distributed SQL, specifically YugaByte DB. A wide range of topics are covered here, such as building application using various ORMs, best practices for scalability in the public cloud, recipes for implementing various microservices, securing your distributed database, etc.
					</p>
				</div>
			</div>

			<div class="entry" style="margin-top: calc(3 * 1rem);">
				<?php
				$categories = get_categories( array(
				    'orderby' => 'name',
				    'hide_empty'  => 1,
				    'hierarchical' => false
				) );
				$num_entries = 0; ?>

				<div class="entry-content">
				<?php
				foreach ( $categories as $category ) {
					// Skip anything that is uncategorized. 
					if ($category->slug == 'uncategorized') {
						continue;
					}

					// Fetch the parent category.
					$parent_category = get_category($category->parent);
					?>

					<div class="card" style="width: 18rem; margin-right: 10px; float: left;">
					  <div class="card-body">
					    <h5 class="card-title"><?php echo esc_html( $category->name ) ?></h5>
					    <h6 class="card-subtitle mb-2 text-muted"><?php echo esc_html( $parent_category->name ) ?></h6>
					    <p class="card-text"><?php echo esc_html( $category->description ) ?></p>
					    <div class="entry-content-read-more">
					      <a href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>" class="btn btn-primary float-right">Read More</a>
					    </div> <!-- entry-content-read-more -->
					  </div> <!-- card-body -->
					</div> <!-- card -->

				<?php	
				} ?>
				</div> <!-- entry-content -->
			</div> <!-- entry -->

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
