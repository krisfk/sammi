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


<!-- <div class="container description-container mt-5"> -->

<div class="d-table mt-5"></div>
<div class="description-container mt-5">

    <img src="<?php echo wp_get_attachment_image_src(get_field('heading_banner'), 'full')[0];?>" alt="">

    <div class="mid-container text-center mt-4 mx-auto"><?php echo get_field('project_brief_description');?> </div>


    <!--detail description-->
    <div class="d-table mt-5"></div>

    <div class="mt-5">
        <img class="w-100" src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/vita-long-img-1.jpg" alt="">

        <div class="animation-div text-center pt-5 pb-5 black-bg">
            <h2>Animation Design</h2>

            <div class="row">

                <div class="col-4">

                    <h2>宅男女神篇</h2>
                </div>
                <div class="col-4">
                    <h2>巴辣女友篇</h2>
                </div>
                <div class="col-4">
                    <h2>貓奴宅家篇</h2>
                </div>
            </div>
        </div>

        <img class="w-100" src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/vita-long-img-2.jpg" alt="">

    </div>
    <!--detail description-->

    <!-- <img src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/vita-long-img-1.jpg" alt=""> -->


</div>

<!-- </div> -->


<script type="text/javascript">
$(function() {

    $('.filter-ul li a').click(function() {

        $(this).toggleClass('active');

    })

})
</script>
<?php

get_footer();