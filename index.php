
<?php get_header(); ?>
<section class="clothes-section">
    <h2>Latest Clothes</h2>

    <div class="clothes-container">

        <?php
        $args = array(
            'post_type' => 'post',   // WooCommerce Product
            'posts_per_page' => 8       // Show 8 clothes
        );

        $loop = new WP_Query($args);

        if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post();
        ?>

        <div class="cloth-card">

           

            <h3><?php the_title(); ?></h3>

          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

            <a href="<?php echo esc_url( get_permalink() ); ?>" class="buy-btn">
                View Product
            </a>

        </div>

        <?php
            endwhile;
        else :
            echo "<p>No clothes found</p>";
        endif;
        wp_reset_postdata();
        ?>

    </div>
</section>

<?php
get_footer();