<?php
get_header();
?>

<section class="clothes-section">
    <?php 
    if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>
    <div class="row g-4 align-items-start">

      <!-- Left Column: PRODUCT IMAGE -->
      <div class="col-md-6">
        
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-thumbnail rounded shadow-sm" alt="Product Image">
      </div>

      <!-- Right Column: PRODUCT DETAILS -->
      <div class="col-md-6">
        
        <h2 class="mb-3"><?php the_title(); ?></h2>

        <p class="text-muted">
         <?php the_content();?>
        </p>

        <h4 class="text-primary mb-3">Rs <?php the_field('price');?></h4>
        <h5 class="text-primary mb-3">Stock <?php the_field('stock');?></h5>

        <button class="btn btn-primary btn-lg">Add to Cart</button>
        </div>

    </div>
    <?php
    endwhile;
else :
    echo '<p>No content found</p>';
endif;
?>

</section>

<?php
get_footer();