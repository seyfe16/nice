<?php get_header() ?>
<div class="containe main-body"  style="margin-bottom: 150px;">
  <div class="row">
      <div class="col-8">
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="card posts">
            <div class="card-header">
              <?php the_title() ?>
            </div>
            <div class="card-body">
            <blockquote class="blockquote mb-0">
              <div class="row">
                <div class="col-6">
                  <?php
                  if ( has_post_thumbnail() ) { ?>
                    <figure class="figure">
                      <img src="<?php the_post_thumbnail_url(); ?>" class="figure-img img-fluid z-depth-1"
                        alt="..." style="width: 400px; height: 250px">
                    </figure>
                  <?php } else {?>
                    <figure class="figure">
                      <img src="https://www.unesale.com/ProductImages/Large/notfound.png" class="figure-img img-fluid z-depth-1"
                        alt="..." style="width: 400px; height: 250px">
                    </figure>
                  <?php } ?>
                </div>
                <div class="col-6">
                  <p><?php the_excerpt() ?></p>
                </div>
              </div>
              <footer class="blockquote-footer"><?php the_time('F j, Y g:i a') ?>- By <?php the_author() ?><cite title="Source Title">
                <a href="<?php the_permalink() ?>">See More</a>
              </cite></footer>
            </blockquote>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <div class="col-4" style="margin-top: 17px;">
        <button class="btn btn-outline-default btn-sm fixed-action-btn" style="bottom: 45px; right: 24px;" type="button" data-toggle="collapse" data-target="#collapseExample"
          aria-expanded="false" aria-controls="collapseExample">
          Side menus <strong> >> </strong>
        </button>
        <div class="collapse" id="collapseExample">
          <div class="mt-3">
            <?php if (is_active_sidebar('sidebar')) {
              dynamic_sidebar('sidebar');
            } ?>
          </div>
        </div>
      </div>
  </div>
</div>

<?php get_footer() ?>
