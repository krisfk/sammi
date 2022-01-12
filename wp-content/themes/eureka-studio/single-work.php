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


<div class="container description-container mt-5">

    <img src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/head-img.jpg" alt="">

    <div class="mid-container text-center mt-5 mx-auto">txt txt txt txt txt txt txt txt txt txt txt txt txt txt txt txt
        txt txt
        txt txt txt txt
        txt txt txt txt txt txt txt txt txt txt txt txt txt txt txt txt txt txt txt </div>


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