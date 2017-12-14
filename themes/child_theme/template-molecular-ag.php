<?php
/**
 *
 * Template Name: Molecular Ag
 *
**/

get_header(); ?>
<link href="https://www.purdue.edu/purdue/css/2015/deptOffice.css" rel="stylesheet" type="text/css"/>
<style>
/* override .caption from images for just this page */
.caption {
  background-color: transparent;
  border: none;
}
</style>
<div class="content deptOfficeContent">
      <div class="container">
        <div class="row bannerRow">
          <div class="bannerContainer col-lg-8 col-md-8 col-sm-7 col-xs-12">
            <style type="text/css">
              .banner{
                background-image:url('https://dev.ag.purdue.edu/plantsciences/wp-content/themes/child_theme/biochem.jpg');
              }
            </style>
            <div class="banner">
                <span class="caption">
                        <h2 class="header" style='color: #fff;'>Purdue Center for Plant Biology</h2><br/>
                        <p class="subheader">Addressing important fundamental questions in plant biology</p>
                </span>
              </div>
            </div>
            <div class="audienceTiles col-lg-4 col-md-4 col-sm-5 col-xs-12 tiles-3">
              <div class="tileRow">
                <div class="tileContainer col-lg-6 col-md-6 col-sm-12 col-xs-6">
                  <a class="tile events" href="https://www.purdue.edu/gradschool/pulse/admission.html">
                    <span class="caption">
                      <span class="icon"><i class="fa fa-check-circle-o"></i></span>
                      <span class="text">Apply Now</span>
                    </span>
                  </a>
                </div>
                <div class="tileContainer col-lg-6 col-md-6 col-sm-12 col-xs-6">
                  <a class="tile admissions" href="https://www.purdue.edu/gradschool/pulse/student-life/living.html">
                    <span class="caption">
                      <span class="icon"><i class="fa fa-home"></i></span>
                      <span class="text">Student Life</span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="tileRow">
                <div class="tileContainer col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <a class="tile careers" href="/plantsciences/pcpb-members/">
                    <span class="caption">
                      <span class="icon"><i class="fa fa-users"></i></span>
                      <span class="text">Faculty</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
        </div>
        <div class="row contentRow">
          <div class="mainContent col-lg-9 col-md-9 col-sm-9 col-xs-12 right">
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="col-sm-8">
                <?php get_template_part( 'content', 'molecular' ); ?>
              </div>
              <div class="col-sm-4">
                <p style="text-align: right;"><a class="twitter-timeline tw-align-right" href="https://twitter.com/PurdueCPB" data-width="220" data-height="300" data-link-color="#FAB81E">Tweets by PurdueCPB</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></p>
              </div>
            <?php endwhile; // end of the loop. ?>
          </div>
          <div class="featureButtons col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <a class="button" href="/plantsciences/what-is-cma/">What is CPB?</a>
            <a class="button" href="https://ag.purdue.edu/Pages/awards.aspx">Points of Pride</a>
            <a class="button" href="http://www.purdue.edu/research/life-sciences/core-facilities.php">Core Facilities</a>
            <a class="button" href="/plantsciences/purdue-center-for-plant-biology-photo-library/">Photo Library</a>
          </div>
        </div>
      </div>
    </div>


<?php
//get_sidebar();
get_footer();


