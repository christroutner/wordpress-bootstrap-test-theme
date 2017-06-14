<?php
/*
Template Name: Homepage
*/
__( 'Homepage', 'wpbo' );
?>

<?php get_header(); ?>

<style>
  #main {
    min-height: 2000px; 
  }
</style>

<div id="content" class="row"> 

    <div id="main" class="col-sm-12" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

            <header>

                <?php
                    $post_thumbnail_id = get_post_thumbnail_id();
                    $featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbo-featured-home' );
                ?>


            </header>

            <section class="row post_content">

                <div class="col-sm-12" id="main">

                  <img style="margin-top: 50px;" class="img-responsive pull-left" src="/wp-content/themes/wickson2/library/img/wickson-logo.png" />
                  
                  <?php the_content(); ?>

                </div>

                <!-- <?php get_sidebar('sidebar2'); // sidebar 2 ?> -->

            </section> <!-- end article header -->

            <footer>
                <p class=""><?php the_tags('<span class="tags">' . __("Tags","wpbo") . ': ', ', ', '</span>'); ?></p>

            </footer> <!-- end article footer -->

        </article> <!-- end article -->

        <?php endwhile; ?>

        <?php else : ?>

        <article id="post-not-found">
            <header>
                <h1><?php _e("Not Found", "wpbo"); ?></h1>
            </header>
            <section class="post_content">
                <p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbo"); ?></p>
            </section>
            <footer>
            </footer>
        </article>

        <?php endif; ?>

    </div> <!-- end #main -->

    <?php //get_sidebar(); // sidebar 1 ?>

</div> <!-- end #content -->

<div class="row">
  <div class="col-md-5 col-sm-2"></div>
  
  <!-- <div class="col-md-6 col-sm-9 embed-responsive-16by9"> -->
  
  <!--
  <div class="col-md-6 col-sm-9 video-container">
    <iframe width="854" height="480" class="embed-responsive-item" src="https://www.youtube.com/embed/T9T8qb8knNY?rel=0" frameborder="0" allowfullscreen></iframe>
    
  </div>
  -->
  
  <div id="videoDiv" class="col-md-6 col-sm-9">
    <iframe width="854" height="480" class="embed-responsive-item" src="https://www.youtube.com/embed/T9T8qb8knNY?rel=0" frameborder="0" allowfullscreen></iframe>
  </div>
</div>

<?php get_footer(); ?>

<script type="text/javascript" src="/wp-content/themes/wickson2/library/js/page/homepage.js"></script>
<script type="text/javascript">
<!--
loadHomepage();
// --></script>
