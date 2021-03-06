<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class="contact-div text-center pb-5 mt-0">

    <div class="d-table pt-5"></div>
    <h2 class="mt-5">CONTACT US</h2>

    <div class="contact-info mt-5 mb-5">
        <?php

$page = get_posts([ 'name' => 'contact',    'post_type' => 'page']);

if ( $page )
{
    echo $page[0]->post_content;
}
?>
        <!-- <div>Tel: (852) 6498 3942</div>
        <div>Email: <a href="mailto:info@eurekastudiohk.com" target="_blank">info@eurekastudiohk.com</a> </div> -->

    </div>

</div>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>




<footer id="colophon" class="site-footer" role="contentinfo">

    &copy; Eureka Studio design ALL RIGHTS RESERVED.

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>