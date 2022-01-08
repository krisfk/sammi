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


<div class="page-description-div pt-5 pb-5 text-center">

    <h2>WORKS</h2>
    <div class="mt-4 mid-container mx-auto">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor
        sit amet,
        Lorem ipsum
        dolor sit amet,
        Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
        Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, </div>



</div>

<ul class="filter-ul">
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


<script type="text/javascript">
$(function() {

    $('.filter-ul li a').click(function() {

        $(this).toggleClass('active');

    })

})
</script>
<?php

get_footer();