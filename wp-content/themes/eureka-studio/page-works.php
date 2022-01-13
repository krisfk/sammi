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
    <!-- <li>
        <a href="javascript:void(0);">
            <div class="checkbox">
                <div class="inner-checkbox"></div>
            </div>
            Lorem ipsum
        </a>
    </li> -->
    <?php
        $terms = get_terms( array( 
            'taxonomy' => 'type_of_work',
            // 'parent'   => 0
        ) );
        for($i=0;$i<count($terms);$i++)
        {
            ?>
    <li>
        <a href="javascript:void(0);" data-work-type="<?php echo $terms[$i]->slug;?>">
            <div class="checkbox">
                <div class="inner-checkbox"></div>
            </div>
            <?php echo $terms[$i]->name; ?>
        </a>
    </li>
    <?php
        }
        // print_r($terms);
    ?>

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
            <div class="col-4 mb-4 work-col <?php
                        
                        $terms = wp_get_object_terms(get_the_ID(),'type_of_work');
                        for($i=0;$i<count($terms);$i++)
                        {
                            echo $terms[$i]->slug.' ';
                        }
                        ?>


            "><a href="<?php echo get_permalink();?>" class="work-a">

                    <div class="logo-overlay"
                        style="background:url(<?php echo wp_get_attachment_image_src(get_field('logo'), 'full')[0];?>)">
                    </div>
                    <img class="w-100"
                        src="<?php echo wp_get_attachment_image_src(get_field('thumbnail'), 'full')[0];?>" alt="">
                </a>
                <div><?php echo get_the_title();?><ul class="tag-ul d-block mt-3 text-start">
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


</div>


<script type="text/javascript">
var filter_type_arr = new Array();

$(function() {
    <?php
    if($_GET['t'])
    {
        ?>
    var click_filter = '<?php echo $_GET['t'];?>';
    $('.filter-ul li a[data-work-type="' + click_filter + '"]').click();
    alert('.filter-ul li a[data-work-type="' + click_filter + '"]');
    <?php
    }
    ?>
    $('.filter-ul li a').click(function() {

        $(this).toggleClass('active');
        var selected_value = $(this).attr('data-work-type');
        // alert(selected_value);
        if ($(this).hasClass('active')) {

            if (!filter_type_arr.includes(selected_value)) {
                filter_type_arr.push(selected_value);
            }

        } else {

            filter_type_arr = filter_type_arr.filter((n) => {
                return n != selected_value
            });


        }
        console.log(filter_type_arr)

        $('.work-col').fadeOut(0);
        $('.work-col').removeClass('animated');
        $('.work-col').css({
            'transform': 'scale(0)'
        });

        if (!filter_type_arr.length) {

            $('.work-col').fadeIn(0);

            $('.work-col').css({
                'transform': 'scale(1)'
            });
            $('.work-col').addClass('animated');

        } else {
            for (i = 0; i < filter_type_arr.length; i++) {
                $('.work-col.' + filter_type_arr[i]).fadeIn(0);

                $('.work-col.' + filter_type_arr[i]).css({
                    'transform': 'scale(1)'
                });

                $('.work-col.' + filter_type_arr[i]).addClass('animated');


            }
        }


        // work-col

    })

})
</script>
<?php

get_footer();