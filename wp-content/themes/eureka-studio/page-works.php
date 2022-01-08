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



<script type="text/javascript">
$(function() {

    $('.main-slide-div').mouseenter(function() {
        $(this).find('.description').stop().fadeOut(0);
        //.stop();
        $(this).find('.description').fadeIn(500);

        // .stop().fadeIn(500);;


        $(this).find('.get-consultant-btn').stop(0).fadeOut(0);
        //.stop();
        $(this).find('.get-consultant-btn').fadeIn(500);
        //.stop().fadeIn(500);
    });

    $('.main-slide-div').mouseleave(function() {
        $(this).find('.description').stop().fadeIn(0);
        $(this).find('.description').fadeOut(500);

        $(this).find('.get-consultant-btn').stop().fadeIn(0);
        $(this).find('.get-consultant-btn').fadeOut(500);

    });


})
</script>
<?php

get_footer();