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
            <div class="col-4 mb-4"><a href="<?php echo get_permalink();?>" class="work-a">

                    <div class="logo-overlay"
                        style="background:url(<?php echo wp_get_attachment_image_src(get_field('logo'), 'full')[0];?>)">
                    </div>
                    <img class="w-100"
                        src="<?php echo wp_get_attachment_image_src(get_field('thumbnail'), 'full')[0];?>" alt="">
                </a>
                <div><?php echo get_the_title();?> </div>
            </div>
            <?php
                }
                wp_reset_postdata();
            } else {
            }
            
            ?>


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