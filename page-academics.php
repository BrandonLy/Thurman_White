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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="pbg1" class="parallax-bg">
				<div id="topinner" class="innerbg">
					<span id="starCont">
						<ul>
							<li>
								<img class="stars" src="<?php bloginfo('template_directory'); ?>/img/star.svg" />
							</li>
							<li>
								<img class="stars" src="<?php bloginfo('template_directory'); ?>/img/star.svg" />
							</li>
							<li>
								<img class="stars" src="<?php bloginfo('template_directory'); ?>/img/star.svg" />
							</li>
							<li>
								<img class="stars" src="<?php bloginfo('template_directory'); ?>/img/star.svg" />
							</li>
						</ul>
					</span>
					<span id="starTitle">
						<h3 id="starText">4 STAR SCHOOL</h3>
						<h4 id="starYear">2013-2014</h4>
					</span>
				</div>
				<div id="bottominner" class="innerbg">
					<div id="academic-boxes">
						<div id="ib1" class="inner-box">
							<div class="inner-inner-box">
							<h2 id="acaBoxTitle">ACCOUNTABILITY REPORT</h2>
							<?php
								query_posts('p=22&&post_type=academics');
								while (have_posts()): the_post(); ?>
								   <?php the_excerpt(); ?>
								<a class="ibLink" href="<?php the_field('pdf'); ?>">READ MORE</a>
								<?php endwhile; ?>							        
				        	</div>
						</div>
						<div id="ib2" class="inner-box">
							<div class="inner-inner-box">
							<h2 id="acaBoxTitle">SCHOOL PERFORMANCE REPORT</h2>
							<?php
								query_posts('p=24&&post_type=academics');
								while (have_posts()): the_post(); ?>
								   <?php the_excerpt(); ?>
								<a class="ibLink" href="<?php the_field('pdf'); ?>">READ MORE</a>
								<?php endwhile; ?>	
				        	</div>
						</div>
						<div id="ib3" class="inner-box">
							<div class="inner-inner-box">
							<h2 id="acaBoxTitle">SCHOOL IMPROVEMENT GOALS</h2>
							<?php
								query_posts('p=27&&post_type=academics');
								while (have_posts()): the_post(); ?>
								   <?php the_excerpt(); ?>
								<a class="ibLink" href="<?php the_field('pdf'); ?>">READ MORE</a>
								<?php endwhile; ?>	
							<?php
								query_posts('p=30&&post_type=academics');
								while (have_posts()): the_post(); ?>
								   <?php the_excerpt(); ?>
								<a class="ibLink" href="<?php the_field('pdf'); ?>">READ MORE</a>
								<?php endwhile; ?>	
				        	</div>
						</div>
						<div id="ib4" class="inner-box">
							<div class="inner-inner-box">
							<h2 id="acaBoxTitle">SCHOOL GROWTH SUMMARY</h2>
							<?php
								query_posts('p=31&&post_type=academics');
								while (have_posts()): the_post(); ?>
								   <?php the_excerpt(); ?>
								<a class="ibLink reading-math-link" href="<?php the_field('reading_report'); ?>">VIEW READING</a>
								<a class="ibLink reading-math-link" href="<?php the_field('math_report'); ?>">VIEW MATH</a>
								<?php endwhile; ?>	
				        	</div>
						</div>
					</div>
				</div>
			</div>
			<div class="title-box" id="titBox1">
				<h1 id="mid-title">ORCHESTRA</h1>
			</div>
			<div id="pbg2" class="parallax-bg">
				<div class="pbg-inner">
					<div class="pbg-inner-inner">
						<video class="pageVid" width="auto" height="auto" controls>
							<source src="<?php bloginfo('template_directory'); ?>/vids/orch.mp4" type="video/mp4">
							Your browser does not support this video
						</video>
					</div>
				</div>
			</div>
			<div class="title-box" id="titBox2">
				<h1 id="mid-title">BAND</h1>
			</div>
			<div id="pbg3" class="parallax-bg">
				<div class="pbg-inner">
					<div class="pbg-inner-inner">
						<video class="pageVid" width="auto" height="auto" controls>
							<source src="<?php bloginfo('template_directory'); ?>/vids/band.mp4" type="video/mp4">
							Your browser does not support this video
						</video>
					</div>
				</div>
			</div>
			<div class="title-box" id="titBox3">
				<h1 id="mid-title">THEATER</h1>
			</div>
			<div id="pbg4" class="parallax-bg">
				<div class="pbg-inner">
					<div class="pbg-inner-inner">
						<img id="phImg">
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
