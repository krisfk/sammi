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

<div class="main-banner">

    <img class="logo" src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/logo.png" alt="">
</div>

<div class="container text-center mid-container">

    <div class="black-line mt-5"></div>

    <h1 class="mt-5">SLOGANSLOGANSLOGAN</h1>

    <div class="mt-4">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum
        dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet</div>

</div>


<div class="row gx-0 mt-5">
    <div class="col-3 main-section-column">
        <div class="main-slide-div main-slide-div-1">

            <div class="grey">

            </div>

            <div class="section-title-div">

                <div class="title-1">Graphic</div>
                <div class="title-2">Design</div>
                <div class="description">Lorem ipsum dolor sit amet <br>
                    ,Lorem ipsum dolor sit amet,</div>
                <a href="javascript:void(0);" class="get-consultant-btn">GET CONSULTANT</a>
            </div>
        </div>
    </div>

    <div class="col-3 main-section-column">
        <div class="main-slide-div main-slide-div-2">
            <div class="grey"></div>
        </div>
    </div>
    <div class="col-3 main-section-column">

        <div class="main-slide-div main-slide-div-3">
            <div class="grey"></div>
        </div>
    </div>
    <div class="col-3 main-section-column">
        <div class="main-slide-div main-slide-div-4">
            <div class="grey"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(function() {

    $('.main-slide-div').mouseenter(function() {
        $(this).find('.description').fadeIn(500);
        $(this).find('.get-consultant-btn').fadeIn(500);
    });

    $('.main-slide-div').mouseout(function() {
        $(this).find('.description').dequeue().fadeOut(500);
        $(this).find('.get-consultant-btn').dequeue().fadeOut(500);
    });


})
</script>
<?php

get_footer();