<?php
/**
 *
 * Template Name: Home Banner Page
 *
**/

get_header(); ?>

<style>
.shader1{background-color:rgba(0,0,0,.6);margin-top:32%;padding:2em;}
.shaderfix1{margin-top:37%;}

@media (max-width:768px){.full-width-banner{height:250px;}
.shader1{margin-top:7%;}
.fullwidthheader{font-size:1.5em;}
.fullwidthparagraph{font-size:1em;}
}

@media (max-width:400px){.shader{margin-top:5%;}}

.entry-content h1 {
  /* phenotyping section is on blue background for contrast */
  color: white !important;
}

.temproary-bigidea {
  background: url(https://ag.purdue.edu/envision/wp-content/uploads/2017/05/Big-Idea-Bottom-Parallax-Background2.jpg);
  height: 100%;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-top: -20px;
  color: white !important;
}
  </style>

<div class="full-width-banner" style="background-image: url('/plantsciences/wp-content/uploads/2017/10/drone-bg.jpg');">
  <div class="container">
    <div class="col-lg-12">
      <div class="shader">
      <article>
        <div class="fullwidthheader">Institute for Plant Sciences</div>
        <p class="fullwidthparagraph">Working together to move plant science discoveries from research to commercialization</p>
      </article>
      </div>
    </div>
  </div>
</div>

<div class="linksContainer rowContainer" id="linksRow">
  <div class="container">
    <div class="links row num-col-4">
      <div class="columnPair">
        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <h3>Basic Plant Biology</h3>
            <div class="divider"></div>
            <p>Invest in basic plant sciences research and education</p>
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <h3>Phenomics</h3>
            <div class="divider"></div>
            <p>Automate data collection to link genes with observable traits, or "phenotypes," caused by environmental variation</p>
          </div>
        </div>
      </div>
      <div class="columnPair">
        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <h3>Digital Agriculture</h3>
            <div class="divider"></div>
            <p>Integrate data streams using a robust analytic platform</p>
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <h3>Entrepreneurship</h3>
            <div class="divider"></div>
              <p>Drive innovations from research to commercialization</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php while ( have_posts() ) : the_post(); ?>
  <div class="section temproary-bigidea">
    <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php get_template_part( 'content', 'page' ); ?>
      </div>
    </div>
  </div></div>
<?php endwhile; // end of the loop. ?>

  <div class="featureNewsContainer rowContainer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="newsItem">
          <h1 class="newsItem-Title">Features</h1>
          <?php
            // we need to get the last three posts that are tagged as news that are published
            $args = array( 'numberposts' => '4', 'post_status' => 'publish', 'category' => '13');
            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ) :
              // grab the featured image from the post
              $thumb_id = get_post_thumbnail_id($recent["ID"]);
              $featured_thumb_URL = wp_get_attachment_url($thumb_id);
              $blurb = $recent["post_content"];
              if (preg_match('/^.{1,260}\b/s', $blurb, $match))
              {
                  $blurb = $match[0];
              }
            ?>
            <div class="col-xs-6">
              <?php if(!empty($thumb_id)) : ?>
                <img style="min-width: 250px;" src="<?php echo $featured_thumb_URL; ?>" class="img-responsive hidden-xs" alt="<?php echo $recent["post_title"]; ?>">
              <?php else: ?>
                <img src="http://placehold.it/350x150&text=No Image" class="img-responsive hidden-xs">
              <?php endif; ?>
              <h5><a href="<?php echo get_permalink($recent["ID"]); ?>"><?php echo $recent["post_title"]; ?></a></h5>
              <p><?php echo $blurb  . " [...]"; ?></p>
            </div>
          <?php endforeach; ?>
          <br style="clear: both;">
        </div> <!-- /.newsItem -->
      </div> <!-- /.col-md-6-->
      <div class="col-md-6">
        <div class="newsItem">
          <h1 class="newsItem-Title">News</h1>
            <?php
              // we need to get the last three posts that are tagged as news that are published
              $args = array( 'numberposts' => '3', 'post_status' => 'publish', 'category' => '6');
              $recent_posts = wp_get_recent_posts( $args );
              $i = 0;
              foreach( $recent_posts as $recent ) :
                // grab the featured image from the post
                $thumb_id = get_post_thumbnail_id($recent["ID"]);
                $featured_thumb_URL = wp_get_attachment_url($thumb_id);
                $blurb = get_the_excerpt($recent["ID"]);
                if(empty($blurb)) {
                  $blurb = get_the_content($recent["ID"]);
                   if (preg_match('/^.{1,260}\b/s', $blurb, $match))
                    {
                        $blurb = $match[0];
                    }
                }

              ?>
              <!-- One News Story -->
              <?php if(!empty($thumb_id)) : ?>
                  <div class="col-sm-4">
                    <img src="<?php echo $featured_thumb_URL; ?>" class="img-responsive hidden-xs" alt="<?php echo $recent["post_title"]; ?>">
                  </div>
              <?php else: ?>
                  <div class="col-sm-4 text-center">
                    <br>
                    <i style="color: #dadada;" class="fa fa-newspaper-o fa-5x"></i>
                    <!-- <img src="http://placehold.it/350x150" class="img-responsive hidden-xs"> -->
                  </div>
              <?php endif; ?>
              <div class="col-sm-8">
                <div class="news-padding-fix">
                  <br>
                  <a href="<?php echo get_permalink($recent["ID"]); ?>"><h4><?php echo $recent["post_title"]; ?></h4></a>
                  <span class="meta-news"></span>
                  <p><?php echo $blurb; ?></p>
                  <a href="<?php echo get_permalink($recent["ID"]); ?>" class="btn btn-sm btn-default clear-fix">Read More</a>
                  <?php if($i == 2) : ?>
                    <br><br>
                    <a class="btn btn-sm btn-default btn-block" href="/plantsciences/recent-news">View All News &raquo;</a>
                  <?php endif; ?>
                </div>
              </div>
              <!-- End News Story -->
            <?php
            $i++;
            endforeach; ?>
          </div>

      </div>
    </div>
  </div>
</div>


<?php
//get_sidebar();
get_footer();

