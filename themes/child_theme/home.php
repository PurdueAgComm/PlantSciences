<?php
/**
 *
 * Template Name: News Home Banner Page
 *
**/

get_header(); ?>

<div class="full-width-banner" style="background-image: url('/plantsciences/wp-content/uploads/2017/10/drone-bg.jpg');">
  <div class="container">
    <div class="col-lg-12">
      <div class="shader">
      <article>
        <div class="fullwidthheader">Institute for Plant Sciences News</div>
        <p class="fullwidthparagraph">Working together to move plant science discoveries from research to commercialization</p>
      </article>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row" style="padding: 15px 0; border-bottom: 1px solid #dadada;">
    <div class="col-sm-3 sidenav">
      <ul>
      <?php wp_nav_menu( array(
          'menu' => 'News Secondary Menu'
      )); ?>
      </ul>
    </div>
    <div class="col-sm-9">
    <?php
    // set the "paged" parameter (use 'page' if the query is on a static front page)
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    // the query
    $the_query = new WP_Query( 'cat=6&paged=' . $paged );
    if ( $the_query->have_posts() ) :
    // the loop
    while ($the_query->have_posts()) :
      $the_query->the_post();
    ?>


      <?php if(has_post_thumbnail()) : ?>
        <div class="col-sm-4">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( array( 250, 350), array( 'class' => 'img-responsive' ) ) ?>
          </a>
        </div>
      <?php else : ?>
        <div class="col-sm-4 text-center">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <i class="fa fa-newspaper-o fa-5x"></i>
          </a>
        </div>
      <?php endif; ?>
        <div class="col-sm-8">
          <h3 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php if(get_the_date()) :?>
            <p class="meta-news"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></p>
          <?php endif; ?>
          <?php the_excerpt(); ?>
          <p><a href="<?php the_permalink(); ?>" class="btn btn-default btn-sm btn-block">Read More &raquo;</a></p>
        </div>
        <br style="clear:both;"><br style="clear:both;">
    <?php endwhile;
    if(function_exists('wp_bootstrap_pagination')) {
      wp_bootstrap_pagination();
    }
    // clean up after the query and pagination
    wp_reset_postdata();
    ?>
    <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    </div>
  </div> <!-- /.row -->
</div> <!-- /.container -->
<?php
//get_sidebar();
get_footer();


