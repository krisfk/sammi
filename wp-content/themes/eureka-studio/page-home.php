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

    <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 d-table"></div>
    <div class="black-line mt-lg-5 mt-md-5 mt-sm-4 mt-4"></div>

    <h2 class="mt-lg-5 mt-md-5 mt-sm-4 mt-4">SLOGANSLOGANSLOGAN</h2>

    <div class="mt-4">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum
        dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet</div>

</div>

<div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 d-table"></div>
<div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 position-relative">
    <div class="white-tri"></div>
    <div class="row gx-0 ">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12  main-section-column">
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

        <div class="col-lg-3 col-md-6 col-sm-6 col-12  main-section-column">
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
        <div class="col-lg-3 col-md-6 col-sm-6 col-12  main-section-column">

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
        <div class="col-lg-3 col-md-6 col-sm-6 col-12  main-section-column">
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



<div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 d-table"></div>
<div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4">
    <h2 class="text-center">WORKS</h2>

    <div class="container mt-lg-5 mt-md-5 mt-sm-4 mt-4">
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
            <div class="col-lg-4 col-md-6 col-s
            m-12 col-12  mb-4"><a href="<?php echo get_permalink();?>" class="work-a">

                    <div class="logo-overlay"
                        style="background:url(<?php echo wp_get_attachment_image_src(get_field('logo'), 'full')[0];?>)">
                    </div>
                    <img class="w-100"
                        src="<?php echo wp_get_attachment_image_src(get_field('thumbnail'), 'full')[0];?>" alt="">
                </a>
                <div><?php echo get_the_title();?>

                    <ul class="tag-ul d-block mt-3 text-start">
                        <?php
                        
                        $terms = wp_get_object_terms(get_the_ID(),'type_of_work');
                        for($i=0;$i<count($terms);$i++)
                        {
                            ?>
                        <li><a
                                href="<?php echo get_site_url()?>/works/?t=<?php echo $terms[$i]->slug;?>">#<?php echo $terms[$i]->name;?></a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
                }
                wp_reset_postdata();
            } else {
            }
            
            ?>


        </div>
    </div>

    <div class="text-center"><a href="<?php echo get_site_url().'/works'?>" class="more-btn">MORE</a></div>



    <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 d-table"></div>
    <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 mb-5">
        <h2 class="text-center">OUR CLIENTS</h2>
        <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4 container">


            <div class="row  align-items-center justify-content-center">
                <?php
        
        $query_args = array(
            'post_type' => 'client_logo',
        );
        
        // The Query
        $the_query = new WP_Query( $query_args );
        
        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                // echo 1;
                ?>
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-4 client-logo-col">
                    <!-- <a href="#" class="work-a"> -->
                    <img class="client-logo-img"
                        src="<?php echo wp_get_attachment_image_src(get_field('logo_img'), 'full')[0];?>" alt="">
                    <!-- </a> -->
                </div>
                <?php
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }
        
        ?>
            </div>
        </div>
        <!-- <a href="" class="client-logo-a"><img class="w-100"
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
 -->

    </div>
</div>
</div>

<script type="text/javascript">
$(function() {

    $('.about-menu-btn').addClass('active');
    $('.get-consultant-btn').click(function() {

        $("html, body").animate({
            scrollTop: $(document).height()
        }, 200);

    })

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