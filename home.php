<?php
/*
Template Name: home
*/
?>
<? get_header()?>
			<!-- certificates -->
			<div class="certificates">
				<section
					class="container certificate ser1 row d-flex justify-content-between align-items-center element-animation ">
					<div class="certificate-img scroll-left col-6">
						<img data-lag=".1" src="<?php bloginfo('template_url'); ?>/assets/image/photo_2022-11-02_02-13-32.jpg" alt="">
					</div>
					<div class="certificate-text scroll-right d-flex col-6 flex-column align-items-center" id="scrollspyHeading2">
						<h1 class="lng-ch1">I have completed a nine-month web programming course at the educational institution
							"ProWeb".</h1>
						<p class="lng-cp">My web development experience is 1.5 year.</p>
					</div>
				</section>
				<section
					class="container certificate ser2 row d-flex justify-content-between align-items-center element-animation ">
					<div class="certificate-text scroll-left d-flex col-6 flex-column" id="scrollspyHeading2">
						<h1 class="lng-sp">I also speak English at level B1 (intermidiate)</h1>
					</div>
					<div class="certificate-img scroll-right col-6">
						<img data-lag=".1" src="<?php bloginfo('template_url'); ?>/assets/image/CamScanner 28-01-2023 16.29.jpg" alt="">
					</div>
				</section>
			</div>
			<!-- skills -->
			<section class="skills container element-animation" id="skills">
				<div class="skills-title">
					<h1 class="lng-asa">My skills</h1>
				</div>
				<div class="owl-carousel">
          <?php
          global $post;
          $myposts = get_posts([ 
          	'numberposts' => -1,
            'category'    => 2
          ]);
          if( $myposts ){
          	foreach( $myposts as $post ){
          		setup_postdata( $post );
          ?>
            <div class="skills-item">
				  	  <a href="<?php the_permalink(); ?>" target="_blank">
                <?php the_post_thumbnail()?>
            </a>
				  	</div>
          <?php } } wp_reset_postdata(); ?>
				</div>
			</section>
			<!-- jobs -->
			<section class="jobs container element-animation" id="jobs">
				<h1 class="lng-jh1">My works</h1>
				<p class="lng-jp">*In some layouts there may be shortcomings.</p>
				<div class="jobs-items d-flex row justify-content-center align-items-center gap-3">
        <?php
          global $post;
          $myposts = get_posts([ 
          	'numberposts' => -1,
            'category'    => 3,
          ]);
          if( $myposts ){
          	foreach( $myposts as $post ){
          		setup_postdata( $post );
          ?>
            <div class="jobs-item col-sm-4">
					  	<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
					  </div>
          <?php } } wp_reset_postdata(); ?>
				</div>
			</section>
<? get_footer()?>