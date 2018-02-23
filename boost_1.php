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

              <p style="font-family: font2;color:#ea4456;">Get featured on our landing page and skip the line to appear first in explore.</p>
      </div>

      <p style="font-family: font2;">Category: <span style="font-family: font3">Graphic Design</span></p>
      <p class="content_header"style="font-family: font2;">Subcategories:</p>

      <div class="clearfix"></div>
      <small style="font-family: font2;color:#ea4456">each subcategory costs 20 EGP extra</small>
      <div id="add_user_input_div">

      </div>

      <script>
        function add_user_input() {
          var user_input = document.getElementById('user_input').value;
          var add_user_input_div = document.getElementById('add_user_input_div');
          var new_user_input = document.createElement('div');
          new_user_input.className = "btn btn_skills";
          new_user_input.style = "width: auto !important;float: left";
          new_user_input.textContent = user_input;
          add_user_input_div.appendChild(new_user_input);
          document.getElementById('user_input').value = "";


        }
      </script>

      <img src="images/icons/Web%20pay-03.png" class="boost_image_web" style="margin-top: 10px;margin-bottom: 10px;width: 100%">
      <img src="images/icons/Payment%203-03.png" class="boost_image_mob" style="margin-top: 10px;margin-bottom: 10px;width: 100%">

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
      </style>

  

      <div class="row" style="padding: 45px">
        <div class="col-lg-4" style="padding-top: 20px">
          <center class="boost_card" style="">
            <p style="font-size: 25pt;font-family: font2">Starter Pack</p>
            <img src="images/icons/Boosting%202%20Days.png" style="width: 70%;margin-bottom: 10px">
            <center class="text-center">
              <div style="display: inline-block;">
                <p style="font-family: font4;font-size: 50pt;float: left;">100</p>
                <p style="font-family: font3;font-size: 20pt;margin-top: 10px;float: left;">EGP</p>
              </div>
            </center>
            <a href="boost_2.php" class="btn btn-change" style="float: none;margin-top: -15px;font-size: 25pt">Select</a>
          </center>
        </div>

        <div class="col-lg-4" style="padding-right: 0px;padding-left: 0px">
          <center class="boost_card" >
            <p style="font-family: font4;font-size: 25pt">Recommended</p>
            <img src="images/icons/Boosting%207%20Days.png" style="width: 70%;margin-bottom: 10px">
            <center class="text-center">
              <div style="display: inline-block;">
                <p style="font-family: font4;font-size: 50pt;float: left;">100</p>
                <p style="font-family: font3;font-size: 20pt;margin-top: 10px;float: left;">EGP</p>
              </div>
            </center>
            <a href="boost_2.php" class="btn btn-change" style="float: none;font-size: 16pt;margin-top: -15px;font-size: 35pt">Select</a>
            <div style="height: 12px"></div>
          </center>
        </div>

        <div class="col-lg-4" style="padding-top: 20px">
          <center class="boost_card">
            <p style="font-size: 25pt;font-family: font2">Starter Pack</p>
            <img src="images/icons/Boosting%2015%20Days.png" style="width: 70%;margin-bottom: 10px">
            <center class="text-center">
              <div style="display: inline-block;">
                <p style="font-family: font4;font-size: 50pt;float: left;">100</p>
                <p style="font-family: font3;font-size: 20pt;margin-top: 10px;float: left;">EGP</p>
              </div>
            </center>
            <a href="boost_2.php" class="btn btn-change" style="float: none;margin-top: -15px;font-size: 25pt">Select</a>
          </center>
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
