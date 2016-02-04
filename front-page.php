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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div id="home-header">
			<div id="home-logo"></div>
			<p>THURMAN WHITE ACADEMY OF THE <span> PERFORMING ARTS</p>
			<p>1661 Galleria Drive  Henderson, NV 89014</p>
		</div>
		<div id="boxes-wrap">
			<div class="box">
				<div class="text-wrap">
				<?php query_posts('p=286');
					while (have_posts()): the_post(); ?>
					<h4 id="who-header"><?php echo get_the_title(); ?></h4>
					<p><?php echo get_the_excerpt(); ?></p>
					<div id="who-content" class="hidden-info"><?php echo get_the_content(); ?></div>
					<a id="who" href="javascript:void(0)">Read More</a>
				<?php endwhile; ?>
				</div>
			</div>
			<div class="box">
				<div class="text-wrap">
				<?php query_posts('p=284');
					while (have_posts()): the_post(); ?>
					<h4 id="deans-header"><?php echo get_the_title(); ?></h4>
					<p><?php echo get_the_excerpt(); ?></p>
					<div id="deans-content" class="hidden-info"><?php echo get_the_content(); ?></div>
					<a id="dean" href="javascript:void(0)">Read More</a>
				<?php endwhile; ?>
				</div>
			</div>
			<div class="box">
				<div class="text-wrap">
					<h4>ANNOUNCEMENTS...</h4>
					<p>Click read more to find out what's happening in your school. This is where the faculty members at Thurman White MS will put out important information or just general news.</p>
					<a href="<?php echo get_site_url(); ?>/announcements/">Read More</a>
				</div>
			</div>
			<div class="box">
				<div class="text-wrap">
					<h4>OTHER EVENTS...</h4>
					<p>Want to know when that basketball game is happening and who it's against? Want to know when and where the book fair is? Click read more to find out!</p>
					<a href="<?php echo get_site_url(); ?>/events/">Read More</a>
				</div>
			</div>
		</div>

		<div id="pt1">
			<h1>WHO ARE WE...?</h1>
			<hr noshade>
			<?php query_posts('p=286');
				while (have_posts()): the_post(); ?>
					<div><?php echo get_the_content(); ?></div>
				<?php endwhile; ?>
			<hr noshade=>
		</div>

		<div id="mid-parallax">
			<div id="parallax-circles">
				<div class="parallax-circle" id="count1"><p id="countup1"><script>var countup1 = new CountUp("countup1", 0, 52, 0, 10); countup1.start(); countup1.update(52); </script></p>
				</div>
				<div class="parallax-circle" id="count2"><p id="countup2"><script>var countup2 = new CountUp("countup2", 0, 1521, 0, 10); countup2.start(); countup2.update(1521); </script></p>
				</div>
				<div class="parallax-circle" id="count3"><p id="countup3"><script>var countup3 = new CountUp("countup3", 0, 10, 0, 10); countup3.start(); countup3.update(10); </script></p>
				</div>
				<p class="parallax-under">CERTIFIED TEACHERS</p>
				<p class="parallax-under">STUDENTS ENROLLED</p>
				<p class="parallax-under">MAGNET PROGRAMS</p>
			</div>
		</div>


		<div id="pt2">
			<h1>SIGN ME UP</h1>
			<hr noshade>
			<p>Linked below you'll find the registration form for incoming 6th grader looking to enroll in the magnet program here at Thurman White MS.</p>
			<p>Additionally, you'll find the magnet course catalog that outlines the different program areas offered at Thurman White. For each program area you'll find a breakdown of each level that describes what will be covered in the course.</p>
			<p>Finally, you'll find the normal course catalog. This PDF is the most comprehensive and covers a few things. Here you will find the different core classes offered at Thurman White and what each class places a focus on. After the core classes, the electives offered are explained with their duration listed. Not only are there core classes and electives, but there is also the opportunity for students to enroll in the international study program, which is explained in the course catalog. The final two things covered are the different diplomas and the honor code.</p>
			<p>Need more information? Feel free to call <a href="tel:+17027990777"/>(702) 799-0777</a></p>
			<hr noshade=>
		</div>

		<div id="pt3">
			<div id="h1-wrap">
				<a href="<?php echo get_site_url(); ?>/wp-content/uploads/2016/02/registration-form.docx"><h1>REGISTRATION FORM</h1></a>
				<a href="<?php echo get_site_url(); ?>/wp-content/uploads/2016/02/magnet-course-catalog.pdf"><h1>MAGNET COURSE CATALOG</h1></a>
				<a href="<?php echo get_site_url(); ?>/wp-content/uploads/2016/02/course-catalog.pdf"><h1>COURSE CATALOG</h1></a>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
