<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thurman_white
 */

get_header(); ?>
<div id="faculty-header">Faculty & Staff</div>

	<div id="nav2">
		<ul>
			<li><a id="a" href="javascript:void(0)">A-Daines</a></li>
			<li><a id="davis" href="javascript:void(0)">Davis-Helm</a></li>
			<li><a id="hemme" href="javascript:void(0)">Hemme-Parker</a></li>
			<li><a id="pelusio" href="javascript:void(0)">Pelusio-Z</a></li>
		</ul>
	</div>

	<div id="primary" class="content-area">
		<main id="faculty-main" class="site-main" role="main">
		<div id="faculty">
		<div id="bg-opacity">
		<?php $i = 1; ?>
		<?php
		add_filter( 'posts_orderby' , 'posts_orderby_lastname' );
		$loop = new WP_Query( array( 'post_type' => 'faculty', 'posts_per_page' => '-1') ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="faculty-member">
			<?php if ($i % 2 == 0) { ?>
				<div class="circle1 circle">
			<?php } else { ?>
				<div class="circle2 circle">
			<?php } ?>
				<div class="faculty-photo-crop">
					<!-- <img src="<?php the_field('faculty_profile_shot'); ?>" /> -->
					<div class="faculty-photo" style="background:url(<?php the_field('faculty_profile_shot'); ?>) center no-repeat; background-size: cover;"></div>
				</div>
				<p class="teacher-name"><?php echo the_title(); ?></p>
			<?php if ($i % 2 == 0) { ?>
				</div>
			<?php } else { ?>
				</div>
			<?php } $i = $i + 1;?>
			</div>

		<?php endwhile; wp_reset_query();
		remove_filter( 'posts_orderby' , 'posts_orderby_lastname' );?>
		</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php// get_sidebar(); ?>
<?php get_footer(); ?>
