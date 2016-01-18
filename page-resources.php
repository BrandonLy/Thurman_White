<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thurman_white
 */

get_header(); ?>
	<div class="resource-header">
		<div class="inner-resource-header">
			<h1>Resources</h1>
		</div>
	</div>
	<div class="menu-wrap">

		<div id="flex-1" class="flex-container">
			<div class="flex-section-title flex-title">
				<p class="section-title">Online Resources</p>
			</div>

			<div class="flex-1-content">
<!-- -->
				<?php
					query_posts('post_type=resources&&category_name=online_resources&&orderby=date&&order=ASC');
					while (have_posts()): the_post(); ?>
					<div class="flex-content">
					<div class="flex-item-text">
						<p class="flex-text"><?php echo the_title(); ?></p>
					</div>

					<div class="flex-item-link">
						<a class="item-link" href="<?php the_field('resource_pdf'); ?>">PDF</a>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
<!-- SECOND DIV -->

		<div id="flex-2" class="flex-container">
			<div class="flex-section-title-2 flex-title">
				<p class="section-title">Teacher Resources</p>
			</div>
<!-- -->
				<?php
					query_posts('post_type=resources&&p=50');
					while (have_posts()): the_post(); ?>
					<div class="flex-content">
					<div class="flex-item-text">
						<p class="flex-text"><?php echo the_title(); ?></p>
					</div>

					<div class="flex-item-link">
						<a class="item-link" href="<?php the_field('resource_pdf'); ?>">PDF</a>
					</div>
				</div>
				<?php endwhile; ?>
				<?php
					query_posts('post_type=resources&&p=52');
					while (have_posts()): the_post(); ?>
					<div class="flex-content">
						<div class="flex-item-text">
							<p class="flex-text"><?php echo the_title(); ?></p>
						</div>

						<div class="link-caption">
							<p class="link-text">Zoned</p>
							<p class="link-text">Magnet</p>
						</div>

						<div class="flex-item-link">
							<a class="item-link" href="<?php the_field('zoned_pdf'); ?>">PDF</a>
							<a class="item-link" href="<?php the_field('magnet_pdf'); ?>">PDF</a>
						</div>
					</div>
				<?php endwhile; ?>
		</div>

<!-- THIRD DIV -->

		<div id="flex-3" class="flex-container">
			<div class="flex-section-title-3 flex-title">
				<p class="section-title">Student Resources</p>
			</div>
<!-- -->
			<?php
					query_posts('post_type=resources&&category_name=student_resources&&orderby=date&&order=ASC');
					while (have_posts()): the_post(); ?>
					<div class="flex-content">
					<div class="flex-item-text">
						<p class="flex-text"><?php echo the_title(); ?></p>
					</div>

					<div class="flex-item-link">
						<a class="item-link" href="<?php the_field('resource_pdf'); ?>">PDF</a>
					</div>
				</div>
				<?php endwhile; ?>
			
		</div>

<!--Fourth div-->
		<div id="flex-4" class="flex-container">
			<div class="flex-section-title-4 flex-title">
				<p class="section-title">Parent Resources</p>
			</div>
<!-- -->
			<?php
					query_posts('post_type=resources&&category_name=parent_resources&&orderby=date&&order=ASC');
					while (have_posts()): the_post(); ?>
					<div class="flex-content">
					<div class="flex-item-text">
						<p class="flex-text"><?php echo the_title(); ?></p>
					</div>

					<div class="flex-item-link">
						<a class="item-link" href="<?php the_field('resource_pdf'); ?>">PDF</a>
					</div>
				</div>
				<?php endwhile; ?>
		</div>
	</div>
	</body>
<?php get_footer(); ?>