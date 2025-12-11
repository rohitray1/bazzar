<?php
get_header();
?>
<section class="clothes-section">
    <?php 
    if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>
    <div class="clothes-container">

        <div class="">

           

            <h3><?php the_title(); ?></h3>

          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
       
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="buy-btn">
                View Product
            </a>

        </div>
<div class="">

           

            <h3><?php the_title(); ?></h3>

          
        <p><php the_content(); ?></p>
            

        </div>
            <?php
    endwhile;
else :
    echo '<p>No content found</p>';
endif;
?>

    </div>
</section>

<?php
get_footer();