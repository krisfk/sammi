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


<div class="page-description-div pt-5 pb-5 text-center ">

    <h2>WORKS</h2>
    <div class="mt-4 mid-container mx-auto">

        <?php echo get_the_content();?>
        <!-- Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor
        sit amet,
        Lorem ipsum
        dolor sit amet,
        Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
        Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, 
     -->
    </div>



</div>

<ul class="filter-ul mt-lg-5 mt-md-5 mt-sm-4 mt-4">
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

<div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4">
    <h2 class="text-center">WORKS</h2>

    <div class="container mt-lg-5 mt-md-5 mt-sm-4 mt-4">
        <div class="row">

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