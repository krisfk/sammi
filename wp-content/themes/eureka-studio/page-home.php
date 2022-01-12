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

    <div class="mt-5 d-table"></div>
    <div class="black-line mt-5"></div>

    <h2 class="mt-5">SLOGANSLOGANSLOGAN</h2>

    <div class="mt-4">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum
        dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet</div>

</div>

<div class="mt-5 d-table"></div>
<div class="mt-5 position-relative">
    <div class="white-tri"></div>
    <div class="row gx-0 ">
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
                <div class="section-title-div">

                    <div class="title-1">Illustration
                    </div>
                    <div class="title-2">Design</div>
                    <div class="description">Lorem ipsum dolor sit amet <br>
                        ,Lorem ipsum dolor sit amet,</div>
                    <a href="javascript:void(0);" class="get-consultant-btn">GET CONSULTANT</a>
                </div>
            </div>
        </div>
        <div class="col-3 main-section-column">

            <div class="main-slide-div main-slide-div-3">
                <div class="grey"></div>
                <div class="section-title-div">

                    <div class="title-1">Website UI/UX
                    </div>
                    <div class="title-2">Design</div>
                    <div class="description">Lorem ipsum dolor sit amet <br>
                        ,Lorem ipsum dolor sit amet,</div>
                    <a href="javascript:void(0);" class="get-consultant-btn">GET CONSULTANT</a>
                </div>
            </div>
        </div>
        <div class="col-3 main-section-column">
            <div class="main-slide-div main-slide-div-4">
                <div class="grey"></div>
                <div class="section-title-div">

                    <div class="title-1">Motion Graphic

                    </div>
                    <div class="title-2">Design</div>
                    <div class="description">Lorem ipsum dolor sit amet <br>
                        ,Lorem ipsum dolor sit amet,</div>
                    <a href="javascript:void(0);" class="get-consultant-btn">GET CONSULTANT</a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="mt-5 d-table"></div>
<div class="mt-5">
    <h2 class="text-center">WORKS</h2>

    <div class="container mt-5">
        <div class="row">
            <?php
            
            $query_args = array(
                'post_type' => 'work',
            );
            
            // The Query
            $the_query = new WP_Query( $query_args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
            <div class="col-4 mb-4"><a href="#" class="work-a"><img class="w-100"
                        src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/work-img.jpg" alt=""></a>
                <div><?php echo get_the_title();?> </div>
            </div>
            <?php
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }
            
            ?>
            <!-- <div class="col-4 mb-4"><a href="#" class="work-a"><img class="w-100"
                        src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/work-img.jpg" alt=""></a>
                <div>Lorem ipsum dolor sit amet, </div>
            </div> -->
            <!-- <div class="col-4 mb-4"><a href="#" class="work-a"><img class="w-100"
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
            </div> -->
        </div>
    </div>

    <div class="text-center"><a href="#" class="more-btn">MORE</a></div>



    <div class="mt-5 d-table"></div>
    <div class="mt-5">
        <h2 class="text-center">OUR CLIENTS</h2>
        <div class="mt-5 container d-flex align-items-center flex-wrap">

            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>

            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>

            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>

            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>
            <a href="" class="client-logo-a"><img class="w-100"
                    src="http://64.227.13.14/sammi/wp-content/uploads/2022/01/client-logo-1.png" alt=""></a>


        </div>
    </div>
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