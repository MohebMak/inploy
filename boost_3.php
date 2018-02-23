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


<div class="container" style="margin-top: 40px">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-1">
    </div>

  </div>
  <!--main profile buttons-->
  <div class="row" style="">







  </div>

  <div class="row" style="margin-top: 0px">

    <div class="col-lg-12">
      <div style="width: 100%">

        <p class="header" >
          Boost Profile
        </p>

      </div>

      <p style="font-family: font2;">Category: <span style="font-family: font3">Graphic Design</span></p>
      <p style="font-family: font2;">Chosen Subcategories:</p>
      <div class="btn btn_skills">shaer</div>
      <div class="btn btn_skills">shaer</div>
      <div class="btn btn_skills">shaer</div>
      <img src="images/icons/Web%20pay-01.png" class="boost_image_web" style="margin-top: 10px;margin-bottom: 10px;width: 100%">
      <img src="images/icons/Payment%203-01.png" class="boost_image_mob" style="margin-top: 10px;margin-bottom: 10px;width: 100%">

      <style>
        .boost_image_mob{
          display: none;
        }
        .boost_image_web{
          display: block;
        }

        @media screen and (max-width: 843px) {
          .boost_image_web{
            display: none;

          }
          .boost_image_mob{
            display: block;
          }
        }
        .small_href:hover{
          text-decoration: none;

        }
      </style>


      <div class="row">
        <div class="col-lg-4">
          <div style="width: 100%">

            <p class="header" >
              Payment Successful!
            </p>

          </div>

          <p style="font-family: font2;">Dear jad</p>
          <p style="font-family: font2;">
            kjas dkjas dkas dkas dkjas d
          </p>

          <div style="background-color: #fff;padding: 20px;box-shadow: 0px 4px 5px rgba(34,34,34,0.2);margin-top: 30px">

            <p style="float: left;font-family: font2;">Category</p>
            <p style="float: right;font-family: font2;">100EGP</p>
            <div class="clearfix"></div>
            <p style="float: left;font-family: font2;">Category</p>
            <p style="float: right;font-family: font2;">100EGP</p>
            <div class="clearfix"></div>
            <p style="float: left;font-family: font2;">Category</p>
            <p style="float: right;font-family: font2;">100EGP</p>
            <div class="clearfix"></div>
            <hr>
            <p style="float: left;font-family: font2;">Category</p>
            <p style="float: right;font-family: font2;">100EGP</p>
            <div class="clearfix"></div>

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
