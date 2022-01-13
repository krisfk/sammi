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


<ul class="tag-ul  mt-4">
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

<!-- <ul class="tag-ul">
    <li><a href="#">#branding</a></li>
    <li><a href="#">#marketing</a></li>
</ul> -->




<div class="d-table mt-lg-5 mt-md-5 mt-sm-4 mt-4"></div>
<div class="description-container mt-lg-5 mt-md-5 mt-sm-4 mt-4">


    <img class="project-logo" src="<?php echo wp_get_attachment_image_src(get_field('logo'), 'full')[0];?>" alt="">


    <img src="<?php echo wp_get_attachment_image_src(get_field('heading_banner'), 'full')[0];?>" alt="">

    <div class="mid-container text-center mt-4 mx-auto"><?php echo get_field('project_brief_description');?> </div>


    <div class="d-table mt-lg-5 mt-md-5 mt-sm-4 mt-4"></div>

    <div class="mt-lg-5 mt-md-5 mt-sm-4 mt-4">
        <!--detail description-->


        <?php echo get_field('description');?>
        <!--detail description-->


    </div>



</div>


<ul class="bottom-ul-nav pt-5 pb-5">
    <li><a href="" class="prev-btn"> PREV</a></li>
    <li><a href="" class="prev-btn"> WORKS</a></li>
    <li><a href="" class="next-btn">NEXT</a></li>
</ul>



<script type="text/javascript">
$(function() {

    $('.works-menu-btn').addClass('active');
    $('video').attr('playsinline', 'playsinline');

})
</script>
<?php

get_footer();