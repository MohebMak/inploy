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

<?php include_once ('nav_signed_in.php');?>

<!-- Main jumbotron for a primary marketing message or call to action -->


<div class="container" style="margin-top: 70px">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-1">
    </div>

  </div>
  <!--main profile buttons-->
  <div class="row" style="">



        <div style="width: 100%" class="text-center">
          <center style="display: inline-block">
            <p class="header text-center" >
Contact Us
            </p>
          </center>
        </div>



  </div>
  <p style="font-family: font2;font-size: 16pt">
Let's Talk
  </p>


  <div class="row" style="margin-top: 20px">

    <div class="col-lg-12">
      <div class="" style="font-family: font2">




        <label style="float: none" class="label_settings">Message Subject</label>
        <div class="clearfix" style=""></div>
        <input type="text" class="form-control" placeholder="Mohamed El Shaer" style="max-width: 300px;float: left">


        <div class="clearfix" style="padding: 20px"></div>

        <div class="clearfix" style=""></div>
        <div class="form-group">
          <label style="float: none" class="label_settings">Message</label>
          <textarea style="max-width: 900px" class="form-control" id="exampleTextarea" rows="6"></textarea>
        </div>


        <div class="clearfix" style="padding: 0px"></div>






        <label style="float: none" class="label_settings">How would you like us to contact you back</label>
      

        <div class="slider-client-freelancers3 " id="Inployees-selected">

        <button onclick="function11()"id="slider-client" type="button" name="button">Email</button>
        <button onclick="function22()"id="slider-freelancers"type="button" name="button">Phone</button>
        </div>

        <script type="text/javascript">


        function function11() {
            document.getElementById('slider-client').style.color = "#ea4456";
            document.getElementById('slider-client').style.boxShadow = "0px 0px 6px gray";

            document.getElementById('slider-freelancers').style.color = "black";
              document.getElementById('slider-freelancers').style.boxShadow = "none";
        }
          function function22() {
              document.getElementById('slider-client').style.color = "black";
              document.getElementById('slider-client').style.boxShadow = "none";

              document.getElementById('slider-freelancers').style.color = "#ea4456";
              document.getElementById('slider-freelancers').style.boxShadow = "0px 0px 6px gray";

            }



        </script>
        <div class="clearfix" style="padding: 20px"></div>
        <button class="btn btn-change_2" style="font-size: 15pt;padding: 10px 20px">Send</button>







      </div>






    </div>
  </div>

  <div style="width: 100%" class="">
    <center style="display: inline-block">
      <p class="header " >
Other ways to reach us
      </p>
    </center>
  </div>

  <p style="font-family: font4">Email</p>
  <p style="font-family: font2">info@Inployeg.com</p>

  <p style="font-family: font4">Support</p>
  <p style="font-family: font2">01005288102</p>








  <br><br><br><br><br><br><br><br><br><br>


  <?php include_once ('fotter.php');?>




</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include_once ("js_include.php")?>
</body>
</html>
