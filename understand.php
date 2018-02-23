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

<img src="placeholder.gif" style="width: 100%;height: 300px;margin-top: 20px">

<div class="container" style="margin-top: 70px">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-1">
    </div>

  </div>
  <!--main profile buttons-->
  <div class="" style="margin-top: 0px;font-family: font2">



    <div class="row" style="">
      <div class="col-md-2"></div>

      <div class="col-md-2">

      </div>


      <div class="col-md-2">
        <button onclick="change_view(this.id)" id="freelancers_btn" class="btn btn_user_profile_active">
          Freelancers
        </button>

      </div>

      <div class="col-md-2">
        <button onclick="change_view(this.id)" id="clients_btn" class="btn btn_user_profile">
          Clients
        </button>

      </div>
      <div class="col-md-2">

      </div>



    </div>

    <script>
      function change_view(id) {

        if(id == 'freelancers_btn'){
          document.getElementById('freelancers').style.display = "";
          document.getElementById('freelancers_btn').className = " btn btn_user_profile_active";
          document.getElementById('clients_btn').className = "btn btn_user_profile";

          document.getElementById('clients').style.display = "none";

        }else if(id == 'clients_btn'){
          document.getElementById('freelancers').style.display = "none";
          document.getElementById('clients_btn').className = " btn btn_user_profile_active";
          document.getElementById('freelancers_btn').className = "btn btn_user_profile";
          document.getElementById('clients').style.display = "";

        }

//        var view = document.getElementById('filter').style.display;
//        if(filter == "none"){
//          document.getElementById('filter').style.display = "block";
//        }else{
//          document.getElementById('filter').style.display = "none";
//        }


      }
    </script>

    <div class="row" style=" margin-top: 10px">



    </div>
    <style>
      .filter_btn:hover{
        cursor: pointer;
      }
    </style>

    <script>
      function open_filter() {
        var filter = document.getElementById('filter').style.display;
        if(filter == "none"){
          document.getElementById('filter').style.display = "block";

        }else{
          document.getElementById('filter').style.display = "none";
        }

      }
    </script>

    <div class="row" id="freelancers" style="margin-top: 10px;">



      <div style="width: 100%" class="text-center">
        <center style="display: inline-block">
          <p class="header text-center" style="font-family: font5">
              Why Inploy ?
          </p>
        </center>
      </div>

      <div class="row" style="margin-top: 20px">
        <div class="col-lg-2">
</div>
        <div class="col-lg-2">

          <center>
            <img src="images/icons/understand/earnings.png"  style="margin-bottom: 10px" width="100%">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>

        </div>
        <div class="col-lg-2">
          <center>
          <img src="images/icons/understand/free2.png" width="100%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>



          </center>

        </div>
        <div class="col-lg-2">
          <center>
          <img src="images/icons/understand/reach.png" width="100%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>
        </div>
        <div class="col-lg-2">
          <center>
          <img src="images/icons/understand/follow2.png" width="100%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>
        </div>
        <div class="col-lg-2">
</div>
      </div>



      <hr class="container">

      <div style="width: 100%" class="text-center">
        <center style="display: inline-block">
          <p class="header text-center" style="font-family: font5">
How It Works
          </p>
        </center>
      </div>

      <div class="row" style="margin-top: 20px">
        <div class="col-lg-1"></div>
        <div class="col-lg-2">

          <center>
            <img src="images/icons/understand/build.png" width="100%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>

        </div>
        <div class="col-lg-2">
          <center>
            <img src="images/icons/understand/apply.png" width="100%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>



          </center>

        </div>
        <div class="col-lg-2">
          <center>
            <img src="images/icons/understand/boost-profile.png" width="100%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>
        </div>
        <div class="col-lg-2">
          <center>
            <img src="images/icons/understand/rate.png" width="100%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>
        </div>

        <div class="col-lg-2">
          <center>
            <img src="images/icons/understand/follow2.png" width="100%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>
        </div>
      </div>



      <div style="width: 100%" class="text-center">
        <center style="display: inline-block">
          <p class="header text-center" style="font-family: font5">
            For More Information Contact Our Support Team
          </p>
          <a href="contact_us.php" class="btn btn-change_2" style="float: none;max-width: 300px;font-size: 15pt">Contact Us</a>
        </center>
      </div>


    </div>



    <div class="row" id="clients" style="display: none">


      <div style="width: 100%;margin-top: 10px" class="text-center">
        <center style="display: inline-block">
          <p class="header text-center" style="font-family: font5">
            Why Inploy ?
          </p>
        </center>
      </div>

      <div class="row" style="margin-top: 20px">
        <div class="col-lg-3">

          <center>
            <img src="images/icons/understand/30.png" width="70%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>

        </div>
        <div class="col-lg-3">
          <center>
            <img src="images/icons/understand/free2.png" width="70%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>



          </center>

        </div>
        <div class="col-lg-3">
          <center>
            <img src="images/icons/understand/post.png" width="70%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>
        </div>
        <div class="col-lg-3">
          <center>
            <img src="images/icons/understand/boost-brief.png" width="70%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>
        </div>
      </div>



      <hr class="container">

      <div style="width: 100%" class="text-center">
        <center style="display: inline-block">
          <p class="header text-center" style="font-family: font5">
Feel Safe With Inploy
          </p>
        </center>
      </div>

      <div class="row" style="margin-top: 20px">
        <div class="col-lg-3">

          <center>
            <img src="images/icons/understand/verified.png" width="70%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>

        </div>
        <div class="col-lg-3">
          <center>
            <img src="images/icons/understand/rate2.png" width="70%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>



          </center>

        </div>
        <div class="col-lg-3">
          <center>
            <img src="images/icons/understand/grow-database.png" width="70%" style="margin-bottom: 10px">
            <p style="font-family: font2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t</p>
          </center>
        </div>




      <div style="width: 100%" class="text-center">
        <center style="display: inline-block">
          <p class="header text-center" style="font-family: font5">
            For More Information Contact Our Support Team
          </p>
          <a href="contact_us.php" class="btn btn-change_2" style="float: none;max-width: 300px;font-size: 15pt">Contact Us</a>
        </center>
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
