

<?php include_once ('nav_signed_in.php');?>

<!-- Main jumbotron for a primary marketing message or call to action -->


<div class="container-fluid" style="margin-top: 70px">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-6">
      <img src="user.jpg" class="rounded-circle img-fluid user_img" width="150" >
      <div class="user_info">
        <p class="user_name" style="margin-bottom: 5px">Mohamed<img src="images/icons/i-17.png" width="20" style="margin-left: 5px"></p>
        <p class="user_review"><img src="images/icons/i-18.png" width="90"></p>
        <!--        if condition based on rate-->
        <p class="user_industry">Work per <span style="color: #ea4456">Project</span></p>
        <p class="user_industry">Work per <span style="color: #ea4456">Hour / 100 EGP</span></p>
        <p class="user_industry">Graphic Designer</p>


        <button class=" user_industry dropdown-toggle" style="background-color: transparent;padding-left:0px;border: none;outline: none;" type="button" id="contact_freelancer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contact Jad
        </button>
        <div class="dropdown-menu dropdown-menu_2 contact_menu" aria-labelledby="contact_freelancer" style="width: 250px;padding: 10px;border-radius: 10px !important;padding-left: 20px">
          <div class="row">
            <div class="col-9">
              <p class="contact_info" href="#" style="margin-bottom: 0px"><img src="images/icons/Icons%20inploy-13.png" width="10" style="margin-right: 5px">mshaer@gmail.com</p>
              <p class="contact_info" href="#" style="margin-bottom: 0px"><img src="images/icons/inploy-15.png" width="10" style="margin-right: 5px">+201111449973</p>
              <p class="contact_info" href="#" style="margin-bottom: 0px"><img src="images/icons/Icons%20inploy-11.png" width="10" style="margin-right: 5px">www.shaer.com</p>
            </div>

          </div>
        </div>
        <p class="user_industry">Report User</p>



      </div>
<!--      <div class="user_info" style="margin-left: 30px">-->
<!--        <button class="btn btn_inploy">Inploy</button>-->
<!---->
<!--      </div>-->

    </div>

    <style>
      .dropdown-menu_2{
        top: -80px !important;
        left: 150px !important;
      }

    </style>
    <div class="col-md-2">

    </div>


  </div>
  <div class="row" style="margin-top: 40px">
    <div class="col-lg-1"></div>
    <div class="col-lg-8">
      <span class="skills_header">Skills:</span>
      <button class="btn btn_skills">
        Extra Info
      </button>
      <button class="btn btn_skills">
        Extra Info
      </button>
      <button class="btn btn_skills">
        Extra Info
      </button>
      <button class="btn btn_skills">
        Extra Info
      </button>



    </div>
    <div class="col-lg-3 icons">
      <img src="images/icons/Icon-23.png" width="60">
      <img src="images/icons/Icon-21.png" width="60">
    </div>
  </div>
  <!--  END freelance top part POV-->

  <!--main profile buttons-->
  <div class="row" style="margin-top: 40px">

    <div class="col-md-1">
    </div>

    <div class="col-md-2">
      <a href="portfolio_freelancer_freelancer.php" class="btn btn_user_profile">
        Portfolio
      </a>

    </div>


    <div class="col-md-2">
      <a href="jobs_archeived_fr_fr_view.php" class="btn btn_user_profile_active">
        Jobs
      </a>

    </div>

    <div class="col-md-2">
      <a href="ratings_freelancer_freelancer.php" class="btn btn_user_profile">
        Ratings
      </a>

    </div>

    <div class="col-md-2">
      <a href="followers_freelancer_freelancer.php" class="btn btn_user_profile">
        Followers
      </a>

    </div>
    <div class="col-md-2">
      <button class="btn btn_user_profile">
        Groups
      </button>

    </div>


  </div>









</div> <!-- /container -->


