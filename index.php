<?php get_header();?>

<div class="container pt-5 pb-5">
  <h1><?php single_cat_title();?></h1>

  <?php if (have_posts()) : while(have_posts()) : the_post();?>
    <div class="card mb-3">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-2">
            <?php if(has_post_thumbnail()):?>
              <img src="<?php the_post_thumbnail_url('thumbnail');?>" class="img-fluid">
            <?php endif;?>
          </div>
          <div class="col-sm-10">
            <h3><?php the_title();?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink();?>" class = "btn btn-success">Read more</a>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; endif;?>

</div>

<?php get_footer();?>
