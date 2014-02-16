<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php sanctuary_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

            <ul id="slide-nav">
                <li><a href="#first" title="Next Section"></a></li>
                <li><a href="#second" title="Next Section"></a></li>
                <li><a href="#third" title="Next Section"></a></li>
                <li><a href="#fourth" title="Next Section"></a></li>
                <li><a href="#fifth" title="Next Section"></a></li>
            </ul>

            <div id="first" class="slide" >
                <div class="content-wrapper">
                    <div class="home-caption">
                        <a class="slink" href="#">
                            <span class="descriptiveTop">A place to work</span>
                            <span class="descriptiveBottom">without distraction</span>
                        </a>
                    </div><!-- home-caption-->
                </div><!-- content-wrapper -->

            </div><!-- slide --><div id="second" class="slide" >
                <div class="content-wrapper">
                    <div class="home-caption">
                        <a class="slink" href="#">
                            <span class="descriptiveTop">Monastic environment</span>
                            <span class="descriptiveBottom">Wisconsin woodlands, natural waterfall</span>
                        </a>
                    </div><!-- home-caption-->
                </div><!-- content-wrapper -->

            </div><!-- slide --><div id="third" class="slide" >
                <div class="content-wrapper">
                    <div class="home-caption">
                        <a class="slink" href="#">
                            <span class="descriptiveTop">Work/live studio cabins</span>
                            <span class="descriptiveBottom">designed for specific art practices</span>
                        </a>
                    </div><!-- home-caption-->
                </div><!-- content-wrapper -->

            </div><!-- slide --><div id="fourth" class="slide" >
                <div class="content-wrapper">
                    <div class="home-caption">
                        <a class="slink" href="#">
                            <span class="descriptiveTop">Gourmet organic</span>
                            <span class="descriptiveBottom">meals brought daily to your private studio cabin</span>
                        </a>
                    </div><!-- home-caption-->
                </div><!-- content-wrapper -->

            </div><!-- slide --><div id="fifth" class="slide" >
                <div class="content-wrapper">
                    <div class="home-caption">
                        <a class="slink" href="#">
                            <span class="descriptiveTop">Engaging community</span>
                            <span class="descriptiveBottom">live music, lectures, group dinners</span>
                        </a>
                    </div><!-- home-caption-->
                </div><!-- content-wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
