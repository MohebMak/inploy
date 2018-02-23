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

<?php //include_once ('nav.php');?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<?php include_once ('Client_View_Freelancer.php'); ?>

<div class="container" style="margin-top: 70px">

  

  <p style="font-family: font2;font-size: 16pt;margin-top: 40px">
    Title & Description
  </p>
  <p class="user_industry" style="max-width: 500px">
    kasj dkjas dkjas dkas dkjas dkjas kd asjd askjd ask dsakj dksaj dkas sakdj kasd
  </p>
  <div class="row" style="margin-top: 40px">



    <div class="col-lg-3">
      <div class="card" style="width: 20rem;">
        <img class="portfolio_img" src="portfolio_thumbnail.png" style="width: 100%" data-toggle="modal" data-target="#myModal">
<!--        <div class="card-block portfolio_card">-->
<!--          <h4 class="card-title">Card title</h4>-->
<!--          <button class="btn btn_skills_sm">-->
<!--            Extra Info-->
<!--          </button>-->
<!--          <button class="btn btn_skills_sm">-->
<!--            Extra Info-->
<!--          </button>-->
<!---->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="card-block portfolio_card" style="border-top: 1px solid rgba(0,0,0,.125)">-->
<!--          <a href="#0" class="card-link"><img src="images/icons/Icon-01.png" width="25"><span class="portfolio_numbers">200</span></a>-->
<!--          <a href="#0" class="card-link"><img src="images/icons/Icon-01.png" width="25"><span class="portfolio_numbers">200</span></a>-->
<!--        </div>-->
      </div>



      <div class="modal  fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(32,52,77,0.7);font-family: font2">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Item title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <center>
                <img src="portfolio-item.png" style="max-width: 100%">
              </center>
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
