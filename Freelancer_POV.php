<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>Inploy</title>

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">
  <link href="main.css" rel="stylesheet">
  <link href="inploy.css" rel="stylesheet">


</head>

<body>

<?php include_once ('nav.php');?>

<!-- Main jumbotron for a primary marketing message or call to action -->


<div class="container" style="margin-top: 70px">

  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-6">
      <img src="user.jpg" class="rounded-circle img-fluid user_img" width="150" >
      <div class="user_info">
        <p class="user_name">Mohamed<img src="images/icons/Icon-01.png" width="20" style="margin-left: 5px"></p>
        <p class="user_review"><img src="reviews.png" width="90"></p>
        <p class="user_industry">Works <span style="color: #ea4456">Project</span></p>
        <p class="user_industry">Graphic Designer</p>


        <button class=" user_industry dropdown-toggle" style="padding-left:0px;border: none;outline: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contact Jad
        </button>
        <div class="dropdown-menu contact_menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>

        <p class="user_industry">Report User</p>

      </div>

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
      <button class="btn btn_user_profile">
        Profile
      </button>

    </div>


    <div class="col-md-2">
      <button class="btn btn_user_profile_active">
        Extra Info
      </button>

    </div>

    <div class="col-md-2">
      <button class="btn btn_user_profile">
        Work
      </button>

    </div>

    <div class="col-md-2">
      <button class="btn btn_user_profile">
        Followers
      </button>

    </div>
    <div class="col-md-2">
      <button class="btn btn_user_profile">
        Groups
      </button>

    </div>


  </div>







  <br><br><br><br><br><br><br><br><br><br>


  <?php include_once ('fotter.php');?>







</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
