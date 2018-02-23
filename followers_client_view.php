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

<?php include_once ('Client_POV.php');?>

<!-- Main jumbotron for a primary marketing message or call to action -->


<div class="container" style="margin-top: 70px">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-1">
    </div>

  </div>



  <div class="row" style="margin-top: 20px">

    <div class="col-lg-12">
      <div class="card jobs_card">
        <div class="card-block" style="padding: 20px">
          <div class="row">
            <div class="col-lg-4">
              <img src="user.jpg" class="img-fluid rounded-circle jobs_card_img" width="80" >
              <div class="jobs_card_info">
                <p class="jobs_card_info_name">Mohamed El Shaer</p>
                <p class="jobs_card_info_company"><img src="images/icons/i-18.png" width="60"></p>
                <p class="jobs_card_info_desc">Freelancer</p>
              </div>
            </div>

            <div class="col-lg-8">
<!--              <div class="jobs_card_button">-->
<!--                <button class="btn btn_open_project">Send Brief</button>-->
<!--              </div>-->

            <div class="jobs_card_button">
              <button class="btn btn_open_project">Unfollow</button>
            </div>
            <div class="jobs_card_button">
              <button class="btn btn_open_project">View Profile</button>
            </div>


            </div>



          </div>
        </div>

        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block" style="padding: 20px">
          <div class="row">
            <div class="col-lg-4">
              <img src="user.jpg" class="img-fluid rounded-circle jobs_card_img" width="80" >
              <div class="jobs_card_info">
                <p class="jobs_card_info_name">Mohamed El Shaer</p>
                <p class="jobs_card_info_company"><img src="images/icons/i-18.png" width="60"></p>
                <p class="jobs_card_info_desc">Freelancer</p>
              </div>
            </div>

            <div class="col-lg-8">
              <!--              <div class="jobs_card_button">-->
              <!--                <button class="btn btn_open_project">Send Brief</button>-->
              <!--              </div>-->

              <div class="jobs_card_button">
                <button class="btn btn_open_project">Unfollow</button>
              </div>
              <div class="jobs_card_button">
                <button class="btn btn_open_project">View Profile</button>
              </div>
              

            </div>



          </div>
        </div>

      </div>






    </div>
  </div>








  <br><br><br><br><br><br><br><br><br><br>


  <?php include_once ('fotter.php');?>




</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include_once ("js_include.php")?>
</body>
</html>
