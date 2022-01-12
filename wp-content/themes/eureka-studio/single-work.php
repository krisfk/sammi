<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="container">
    <h1 class="project-name text-center pb-3">
        <?php echo get_field('project_name');?>

    </h1>
</div>

<ul class="tag-ul">
    <li><a href="#">#branding</a></li>
    <li><a href="#">#marketing</a></li>
</ul>




<div class="d-table mt-lg-5 mt-md-5 mt-sm-4 mt-4"></div>
<div class="description-container mt-lg-5 mt-md-5 mt-sm-4 mt-4">


    <img src="<?php echo wp_get_attachment_image_src(get_field('logo'), 'full')[0];?>" alt="">


    <img src="<?php echo wp_get_attachment_image_src(get_field('heading_banner'), 'full')[0];?>" alt="">

    <div class="mid-container text-center mt-4 mx-auto"><?php echo get_field('project_brief_description');?> </div>


    <div class="d-table mt-lg-5 mt-md-5 mt-sm-4 mt-4"></div>

    <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4">
        <!--detail description-->


        <?php echo get_field('description');?>
        <!--detail description-->


    </div>



</div>



<script type="text/javascript">
$(function() {

    $('.filter-ul li a').click(function() {

        $(this).toggleClass('active');

    })

})
</script>
<?php

get_footer();