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
              Account Settings
            </p>
          </center>
        </div>


  <div class="row" style="margin-top: 20px;    width: 100%;">

    <div class="col-lg-6">
      <p style="font-family: font2;font-size: 16pt">
        Your Information
      </p>

      <div class="" style="font-family: font2">

        <label style="float: none" class="label_settings">Account Code</label>: <span style="font-size: 16pt;margin-left: 20px">#56HGSAHD</span>

        <div class="clearfix"></div>


        <label style="float: none" class="label_settings">Name</label>
        <div class="clearfix" style=""></div>
        <input type="text" class="form-control" placeholder="Mohamed El Shaer" style="max-width: 300px;float: left">
        <button class="btn btn-change">Change</button>

        <div class="clearfix" style="padding: 20px"></div>

        <label style="float: none" class="label_settings">Email</label>
        <div class="clearfix" style=""></div>
        <input type="text" class="form-control" placeholder="sha3er@aucegypt.edu" style="max-width: 300px;float: left">
        <button class="btn btn-change">Change</button>


        <div class="clearfix" style="padding: 20px"></div>

        <label style="float: none" class="label_settings">Password</label>
        <div class="clearfix" style=""></div>
        <input type="text" class="form-control" placeholder="**********" style="max-width: 300px;float: left">
        <button class="btn btn-change">Change</button>

        <div class="clearfix" style="padding: 20px"></div>

        <label style="float: none" class="label_settings">Phone Number</label>
        <div class="clearfix" style=""></div>
        <input type="text" class="form-control" placeholder="01111449973" style="max-width: 300px;float: left">
        <button class="btn btn-change">Change</button>

        <div class="clearfix" style="padding: 20px"></div>

        <label style="float: none" class="label_settings">Profile Type</label>
        <div class="row">

          <div class="clearfix"></div>


          <div class="col-md-1">
            <a href="followers_client_view.php" class="btn btn-change">
              Client
            </a>

          </div>
        </div>

        <div class="clearfix" style="padding: 20px"></div>


        <label style="float: none" class="label_settings">User Type</label>
        <div class="row">

          <div class="clearfix"></div>
          <div class="col-md-1">
            <a href="jobs_posted_client_view.php" style="font-size: 10pt" class="btn btn-change_2">
              Individual
            </a>

          </div>

          <div class="col-md-1">
            <a href="followers_client_view.php" class="btn btn-change">
              SME
            </a>

          </div>
        </div>

        <div class="row" style="margin-top: 30px">

        </div>
        <label style="float: none;text-decoration: underline;margin-top: 20px;font-size: 16pt" class="label_settings">Delete</label>


        <div class="clearfix" style="padding: 20px"></div>
        <button class="btn btn-change_2" style="font-size: 15pt;padding: 10px 20px">Save</button>







      </div>






    </div>


        <div class="col-lg-6">
              <p style="font-family: font2;font-size: 26pt">
    Notification Settings            </p>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"><span style="margin-left: 5px;color: #ea4456">Notify me when a new service provider applies</span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"><span style="margin-left: 5px;color: #ea4456">Notify me when Inploy recommends a freelancer</span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"><span style="margin-left: 5px;color: #ea4456">Notify me with a receipt when I make any purchases on Inploy</span>
                </label>
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
