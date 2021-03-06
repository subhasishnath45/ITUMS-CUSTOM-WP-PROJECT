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
 * @package itums
 */

get_header();
?>
<?php 
	if(have_posts()):
	  while(have_posts()):
	    the_post();
?>
<div class="page-single-default">
            <div class="about-row01" id="about-us">
                <div class="container-fluid">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                            <div class="col-12">
                                <div class="about-wrapper">
	                                <div class="single-txt">
	                                    <?php the_content(); ?>        
	                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<?php 
    endwhile;
    wp_reset_postdata();
  endif;
?>
<?php
get_footer();
?>
