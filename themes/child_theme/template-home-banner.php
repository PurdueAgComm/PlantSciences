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
    <h1>PLANT SCIENCES INITIATIVE</h1>
    <div class="divider"></div>
    <div class="content">
      <p class="content-text">Our mission is to be a global leader in delivering innovation, technology, and the human capacity necessary to help farming operations of all sizes produce food, fuel, and fiber more efficiently.</p>
    </div>
  </div>
</div>

<div class="proofPointContainer rowContainer">
  <div class="container">
    <div class="proofPoint row">
      <h1>Working together to move plant science discoveries from research to application</h1>
    </div>
  </div>
</div>

<div class="linksContainer rowContainer" id="linksRow">
  <div class="container">
    <div class="links row num-col-4">
      <div class="columnPair">
        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-flask"></i>
            </div>
            <h3>Research</h3>
            <div class="divider"></div>
            <ul>
              <li><a href="http://www.admissions.purdue.edu/majors/index.php">Majors and Minors</a></li>
              <li><a href="https://www.lib.purdue.edu/">Libraries</a></li>
              <li><a href="http://www.purdue.edu/studentsuccess/orientation/learning_communities/index.html">Learning Communities</a></li>
              <li><a href="http://www.purdue.edu/studentsuccess/academic/index.html">Academic Support and Tutoring</a></li>
            </ul>
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <h3>Education</h3>
            <div class="divider"></div>
            <ul>
              <li><a href="https://www.purdue.edu/gradschool/index.html">Graduate School</a></li>
              <li><a href="https://honors.purdue.edu/">Honors College</a></li>
              <li><a href="https://owl.english.purdue.edu/">Online Writing Lab</a></li>
              <li><a href="http://www.purdue.edu/thinksummer/">Think Summer</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="columnPair">
        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-globe"></i>
            </div>
            <h3>Impact</h3>
            <div class="divider"></div>
            <ul>
              <li><a href="https://www.distance.purdue.edu/">Distance Learning</a></li>
              <li><a href="http://www.purdue.edu/ziptrips/">Zip Trips</a></li>
              <li><a href="http://www.studyabroad.purdue.edu/">Study Abroad</a></li>
              <li><a href="http://www.purdue.edu/purdue/outreach_community/youth_programs.html">Youth Programs</a></li>
            </ul>
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <h3>Support</h3>
            <div class="divider"></div>
            <ul>
              <li><a href="http://www.purdue.edu/provost/">Provost</a></li>
              <li><a href="http://www.purdue.edu/advisors/">Advising</a></li>
              <li><a href="http://www.purdue.edu/vpsa/">Student Life</a></li>
              <li><a href="https://www.iss.purdue.edu/">International Students and Scholars</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php get_template_part( 'content', 'page' ); ?>
      </div>
    </div>
  </div>
<?php endwhile; // end of the loop. ?>

  <div class="featureNewsContainer rowContainer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="newsItem">
          <h1 class="newsItem-Title">Features</h1>
          <div class="col-xs-4">
            <img src="http://placehold.it/170x90" class="img-responsive">
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-xs-4">
            <img src="http://placehold.it/170x90" class="img-responsive">
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-xs-4">
            <img src="http://placehold.it/170x90" class="img-responsive">
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-xs-4">
            <img src="http://placehold.it/170x90" class="img-responsive">
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-xs-4">
            <img src="http://placehold.it/170x90" class="img-responsive">
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-xs-4">
            <img src="http://placehold.it/170x90" class="img-responsive">
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div> <!-- /.newsItem -->
      </div> <!-- /.col-md-6-->
      <div class="col-md-6">
        <div class="newsItem">
          <h1 class="newsItem-Title">News</h1>
            <!-- One News Story -->
            <div class="col-sm-4">
              <img src="http://placehold.it/170x90" class="img-responsive hidden-xs">
            </div>
            <div class="col-sm-8">
              <div class="news-padding-fix">
                <a href="#"><h4>News Article Title</h4></a>
                <span class="meta-news">Tuesday, February 2, 2016</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ipsa nam enim obcaecati a eligendi sunt officiis unde, quasi eos omnis ipsam excepturi exercitationem perspiciatis, dolores iure natus accusamus consequatur.</p>
                <a href="#" class="btn btn-sm btn-default">Read More</a>
              </div>
            </div>
            <!-- End News Story -->
            <!-- One News Story -->
            <div class="col-sm-4">
              <img src="http://placehold.it/170x90" class="img-responsive hidden-xs">
            </div>
            <div class="col-sm-8">
              <div class="news-padding-fix">
                <a href="#"><h4>News Article Title</h4></a>
                <span class="meta-news">Tuesday, February 2, 2016</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ipsa nam enim obcaecati a eligendi sunt officiis unde, quasi eos omnis ipsam excepturi exercitationem perspiciatis, dolores iure natus accusamus consequatur.</p>
                <a href="#" class="btn btn-sm btn-default">Read More</a>
              </div>
            </div>
            <!-- End News Story -->
            <!-- One News Story -->
            <div class="col-sm-4">
              <img src="http://placehold.it/170x90" class="img-responsive hidden-xs">
            </div>
            <div class="col-sm-8">
              <div class="news-padding-fix">
                <a href="#"><h4>News Article Title</h4></a>
                <span class="meta-news">Tuesday, February 2, 2016</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ipsa nam enim obcaecati a eligendi sunt officiis unde, quasi eos omnis ipsam excepturi exercitationem perspiciatis, dolores iure natus accusamus consequatur.</p>
                <a href="#" class="btn btn-sm btn-default">Read More</a>
              </div>
            </div>
            <!-- End News Story -->
          </div>
      </div>
    </div>
  </div>
</div>

<?php
//get_sidebar();
get_footer();


