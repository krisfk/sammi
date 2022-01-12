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
    <h1 class="project-name text-center">
        <?php echo get_field('project_name');?>

    </h1>
</div>

<ul class="filter-ul mt-5">
    <li>
        <a href="javascript:void(0);">
            <div class="checkbox">
                <div class="inner-checkbox"></div>
            </div>
            Lorem ipsum
        </a>

    </li>
    <li>
        <a href="javascript:void(0);">
            <div class="checkbox">
                <div class="inner-checkbox"></div>
            </div>
            Lorem ipsum
        </a>

    </li>
    <li>
        <a href="javascript:void(0);">
            <div class="checkbox">
                <div class="inner-checkbox"></div>
            </div>
            Lorem ipsum
        </a>

    </li>
    <li>
        <a href="javascript:void(0);">
            <div class="checkbox">
                <div class="inner-checkbox"></div>
            </div>
            Lorem ipsum
        </a>

    </li>
    <li>
        <a href="javascript:void(0);">
            <div class="checkbox">
                <div class="inner-checkbox"></div>
            </div>
            Lorem ipsum
        </a>

    </li>
    <li>
        <a href="javascript:void(0);">
            <div class="checkbox">
                <div class="inner-checkbox"></div>
            </div>
            Lorem ipsum
        </a>

    </li>
</ul>

<div class="mt-5">
    <h2 class="text-center">WORKS</h2>

    <div class="container mt-5">
        <div class="row">
            <div class="col-4 mb-4"><a href="#" class="work-a"><img class="w-100"
                        src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/work-img.jpg" alt=""></a>
                <div>Lorem ipsum dolor sit amet, </div>
            </div>
            <div class="col-4 mb-4"><a href="#" class="work-a"><img class="w-100"
                        src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/work-img.jpg" alt=""></a>
                <div>Lorem ipsum dolor sit amet, </div>
            </div>
            <div class="col-4 mb-4"><a href="#" class="work-a"><img class="w-100"
                        src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/work-img.jpg" alt=""></a>
                <div>Lorem ipsum dolor sit amet, </div>
            </div>
            <div class="col-4 mb-4"><a href="#" class="work-a"><img class="w-100"
                        src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/work-img.jpg" alt=""></a>
                <div>Lorem ipsum dolor sit amet, </div>
            </div>
            <div class="col-4 mb-4"><a href="#" class="work-a"><img class="w-100"
                        src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/work-img.jpg" alt=""></a>
                <div>Lorem ipsum dolor sit amet, </div>
            </div>
            <div class="col-4 mb-4"><a href="#" class="work-a"><img class="w-100"
                        src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/work-img.jpg" alt=""></a>
                <div>Lorem ipsum dolor sit amet, </div>
            </div>
        </div>
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