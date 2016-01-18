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
					<h4>WHO ARE WE...?</h4>
					<p>Cupcake ipsum dolor sit amet chupa chups cookie pastry marshmallow. Chupa chups macaroon cake. Toffee halvah toffee sesame snaps...</p>
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="box">
				<div class="text-wrap">
					<h4>DEAN'S DIALOUGE...</h4>
					<p>Cupcake ipsum dolor sit amet chupa chups cookie pastry marshmallow. Chupa chups macaroon cake. Toffee halvah toffee sesame snaps...</p>
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="box">
				<div class="text-wrap">
					<h4>ANNOUNCEMENTS...</h4>
					<p>Cupcake ipsum dolor sit amet chupa chups cookie pastry marshmallow. Chupa chups macaroon cake. Toffee halvah toffee sesame snaps...</p>
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="box">
				<div class="text-wrap">
					<h4>OTHER EVENTS...</h4>
					<p>Cupcake ipsum dolor sit amet chupa chups cookie pastry marshmallow. Chupa chups macaroon cake. Toffee halvah toffee sesame snaps...</p>
					<a href="#">Read More</a>
				</div>
			</div>
		</div>

		<div id="pt1">
			<h1>WHO ARE WE...?</h1>
			<hr noshade>
			<p>Cupcake ipsum dolor sit amet chupa chups cookie pastry marshmallow. Chupa chups macaroon cake powder topping gummies gingerbread cake apple pie. Toffee halvah toffee sesame snaps. Cupcake ipsum dolor sit amet chupa chups cookie pastry marshmallow. Chupa chups macaroon cake powder topping gummies gingerbread cake apple pie. Toffee halvah toffee sesame snaps.</p>
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
			<p>Cupcake ipsum dolor sit amet chupa chups cookie pastry marshmallow. Chupa chups macaroon cake powder topping gummies gingerbread cake apple pie. Toffee halvah toffee sesame snaps. Cupcake ipsum dolor sit amet chupa chups cookie pastry marshmallow. Chupa chups macaroon cake powder topping gummies gingerbread cake apple pie. Toffee halvah toffee sesame snaps.</p>
			<hr noshade=>
		</div>

		<div id="pt3">
			<div id="h1-wrap">
				<h1>REGISTRATION FORM</h1>
				<h1>MAGNET COURSE CATALOG</h1>
				<h1>COURSE CATALOG</h1>
			</div>
			<p>Cupcake ipsum dolor sit amet chupa chups cookie pastry marshmallow. Chupa chups macaroon cake powder topping gummies gingerbread cake apple pie. Toffee halvah toffee sesame snaps. Cupcake ipsum dolor sit amet chupa chups cookie pastry marshmallow. Chupa chups macaroon cake powder topping gummies gingerbread cake apple pie. Toffee halvah toffee sesame snaps.</p>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
