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
			<li><a href="javascript:void(0)">Adams-Daines</a></li>
			<li><a href="javascript:void(0)">Davis-Helm</a></li>
			<li><a href="javascript:void(0)">Hemme-Parker</a></li>
			<li><a href="javascript:void(0)">Pelusio-Wilcox</a></li>
		</ul>
	</div>

	<div id="primary" class="content-area">
		<main id="faculty-main" class="site-main" role="main">
		<div id="faculty">
		<div id="bg-opacity">
		<?php $i = 1; ?>
		<?php $loop = new WP_Query( array( 'post_type' => 'faculty' ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php if ($i % 2 == 0) { ?>
				<div class="circle1 circle">
			<?php } else { ?>
				<div class="circle2 circle">
			<?php } 
			$i = $i + 1; ?>
				<img src="<?php the_field('faculty_profile_shot'); ?>" />
				<p class="teacher-name"><?php echo the_title(); ?></p>
				<p class="course-name"><?php the_field('course_name'); ?></p>
			</div>
				
		<?php endwhile; wp_reset_query(); ?>
		</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php// get_sidebar(); ?>
<?php get_footer(); ?>
