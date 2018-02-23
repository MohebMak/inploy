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



        <div style="width: 100%" class="">

            <p class="header " >
Wallet
            </p>

        </div>



  </div>
  <div class="row" style="">



    <div style="width: 100%" class="">

      <p style="font-family: font4;font-size: 19pt;">
        <span style="font-family: font2">Wallet</span> : XXXXXX
      </p>

    </div>

    <div style="width: 100%" class="">

      <p style="font-family: font4;font-size: 19pt;">
        <span style="font-family: font2">Current Amount</span> : 1,500 EGP
      </p>

    </div>



  </div>
  <div class="clearfix"></div>
  <p style="margin-top: 20px;color: #ea4456;font-family:font5 !important;margin-bottom: 0px">Amount</p>
  <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;">



  <p style="margin-top: 50px;color: #ea4456;font-family:font5 !important;margin-bottom: 0px">Promocode</p>
  <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;">

  <div class="clearfix"></div>

  <div class="clearfix" style="padding: 20px;margin-top: -20px;"></div>
  <p style="margin-top: 20px;font-size: 14pt" class="content_header">Payment Info</p>

  <img src="images/icons/understand/visa.png" onclick="change_pay('visa')" width="60">

  <img src="images/icons/Icon-23.png" onclick="change_pay('wallet')" width="60">
  <img src="images/icons/understand/fawry-en1.png" onclick="change_pay('fawry')" width="130">


  <div id="visa_info" style="display: none">
    <p style="margin-top: 10px;color: #ea4456;font-family:font2 !important;margin-bottom: 0px">Credit Card Number</p>
    <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;">
    <div class="clearfix"></div>

    <p style="margin-top: 10px;color: #ea4456;font-family:font2 !important;margin-bottom: 0px">Name On Card</p>
    <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;">
    <div class="clearfix"></div>

    <p style="margin-top: 10px;color: #ea4456;font-family:font2 !important;margin-bottom: 0px">Credit Card Number</p>
    <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;max-width: 100px">
    <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;max-width: 100px;margin-left: 10px">
    <div class="clearfix"></div>

    <p style="margin-top: 10px;color: #ea4456;font-family:font2 !important;margin-bottom: 0px">Credit Card Number</p>
    <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;">
    <div class="clearfix"></div>

    <div class="form-check" style="margin-top: 20px">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input"><span style="margin-left: 5px;font-family: font2">I would like to remember my card info for future purchases</span>

      </label>
    </div>
  </div>

  <div style="display: none" id="fawry_info">

    <p style="margin-top: 10px;color: #ea4456;font-family:font2 !important;margin-bottom: 0px">fawry Code</p>
    <input disabled type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;">
    <div class="clearfix"></div>

  </div>

  <div style="display: none" id="wallet_info">

    <p style="margin-top: 10px;color: #ea4456;font-family:font2 !important;margin-bottom: 0px">Phone Number</p>
    <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;">
    <div class="clearfix"></div>

    <label style="float: none;margin-top: 10px" class="label_settings">Payment Provider</label>
    <select class="form-control" style="max-width: 300px">
      <option disabled="" selected="">Choose Provider</option>
      <option>Etisalat</option>
      <option>Orange</option>
      <option>Vodafone</option>
      <option>WE</option>
    </select>



  </div>
  <div class="clearfix"></div>
  <a href="boost_3.php" class="btn btn-change" style="font-size: 14pt;padding-right: 20px;padding-left: 20px;margin-top: 40px">Pay</a>

  <script>
    function change_pay(type) {

      if(type == "visa"){

        document.getElementById('visa_info').style.display = "";
        document.getElementById('fawry_info').style.display = "none";
        document.getElementById('wallet_info').style.display = "none";

      }else if (type == "fawry"){

        document.getElementById('visa_info').style.display = "none";
        document.getElementById('fawry_info').style.display = "";
        document.getElementById('wallet_info').style.display = "none";

      }else if (type == "wallet"){

        document.getElementById('visa_info').style.display = "none";
        document.getElementById('fawry_info').style.display = "none";
        document.getElementById('wallet_info').style.display = "";

      }

    }
  </script>










  <br><br><br><br><br><br><br><br><br><br>


  <?php include_once ('fotter.php');?>




</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include_once ("js_include.php")?>
</body>
</html>
