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
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-1">
    </div>
    <p class="header">Report</p>
  </div>
  <!--main profile buttons-->
  <div class="row" style="margin-top: 40px">

    <div class="col-md-1">
    </div>

    <div class="col-md-2">
      <button class="btn btn_specific_selected">
        User
      </button>

    </div>


    <div class="col-md-2">
      <button class="btn btn_specific_selected">
        Brief
      </button>

    </div>

    <div class="col-md-2">
      <button class="btn btn_specific">
        Portfolio
      </button>

    </div>




  </div>
  <div class="row" style="margin-top: 40px">
    <div class="col-md-1">
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label class="label_text">Explain why ?</label>
        <textarea class="form-control" id="exampleTextarea" rows="10"></textarea>
      </div>
      <button class="btn btn_submit">
        Report
      </button>
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
