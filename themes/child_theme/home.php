<?php
/**
 *
 * Template Name: Home Banner Page
 *
**/

get_header(); ?>

<div class="introContainer rowContainer" id="introRow">
  <div class="shader"></div>
  <div class="container intro">
    <div class="icon">
      <i class="fa fa-leaf"></i>
    </div>
    <h1>PLANT SCIENCES NEWS</h1>
    <div class="divider"></div>
    <div class="content">
      <!-- <p class="content-text">Our mission is to be a global leader in delivering innovation, technology, and the human capacity necessary to help farming operations of all sizes produce food, fuel, and fiber more efficiently.</p> -->
    </div>
  </div>
</div>



<div class="container">
  <br><br>
      <?php
      // we need to get the last three posts that are tagged as news that are published
      $args = array( 'numberposts' => '3', 'post_status' => 'publish', 'category' => '6');
      $recent_posts = wp_get_recent_posts( $args );
      foreach( $recent_posts as $recent ) :
      // echo '<a href="' . get_permalink($recent["ID"]) . '" title="Read: '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>';
      // echo "<p>" . $recent["post_content"] . "</p>";
        // grab the featured image from the post
        $thumb_id = get_post_thumbnail_id($recent["ID"]);
        $featured_thumb_URL = wp_get_attachment_url($thumb_id);
        $blurb = $recent["post_content"];
        if (preg_match('/^.{1,500}\b/s', $blurb, $match))
        {
            $blurb = $match[0];
        }
      ?>
      <!-- One News Story -->
      <?php if(!empty($thumb_id)) : ?>
        <div class="row">
          <div class="col-sm-4">
            <img src="<?php  echo $featured_thumb_URL; ?>" class="img-responsive hidden-xs" alt="<?php echo $recent["post_title"]; ?>">
          </div>
      <?php else: ?>
        <div class="row">
          <div class="col-sm-4">
            <img src="http://placehold.it/350x150">
          </div>
      <?php endif; ?>
        <div class="col-sm-8">
          <div class="news-padding-fix">
            <a href="<?php echo get_permalink($recent["ID"]); ?>"><h4><?php echo $recent["post_title"]; ?></h4></a>
            <div class="meta-news"><?php echo get_the_date('l, F j, Y', $recent["ID"]) . $recent["post_meta"]; ?></div>
            <p><?php echo $blurb . " [...]" ?></p>
            <a href="<?php echo get_permalink($recent["ID"]); ?>" class="btn btn-sm btn-default">Read More</a>
          </div>
        </div>
      </div> <!-- /.row -->
      <br><br>
      <!-- End News Story -->
      <?php endforeach; ?>

</div> <!-- /.container -->


<?php
//get_sidebar();
get_footer();


