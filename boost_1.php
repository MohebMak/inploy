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

  <div class="row" style="margin: 0;">

    <div class="col-lg-12" style="padding:0; margin:0;">
      <div style="width: 100%">

        <p class="header" >
          Boost Profile
        </p>
      </div>
</div>
<div id="boost_1">
              <p style="font-family: font2;color:#ea4456;">Get featured on our landing page and skip the line to appear first in explore.</p>

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



      <div class="row "style="padding: 45px">
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
            <a onclick="function1()" class="btn btn-change" style="float: none;margin-top: -15px;font-size: 25pt">Select</a>
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
            <a onclick="function1()" class="btn btn-change" style="float: none;font-size: 16pt;margin-top: -15px;font-size: 35pt">Select</a>
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
            <a onclick="function1()" class="btn btn-change" style="float: none;margin-top: -15px;font-size: 25pt">Select</a>
          </center>
        </div>
        </div>






    </div>

<script type="text/javascript">
function function1() {
        document.getElementById('boost_1').style.display = "none";

        document.getElementById('boost_2').style.display = "block";
}
function function2() {
        document.getElementById('boost_2').style.display = "none";
        document.getElementById('boost_3').style.display = "block";
}
</script>
<div id="boost_2">


        <p style="font-family: font2;">Category: <span style="font-family: font3">Graphic Design</span></p>
        <p class="content_header">Choose Subcategory</p>
        <input type="text" class="form-control" placeholder="" id="user_input" style="max-width: 300px;float: left;margin-right: 10px">
        <button onclick="add_user_input()" class="btn btn_inploy" style="float: left;margin-left: 10px;">Add</button>
        <div class="clearfix"></div>
        <small style="font-family: font2;color:#ea4456">each subcategory costs 10 EGP extra</small>
        <div id="add_user_input_div">

        </div>

        <script>

          var input_ids = 0;

          function add_user_input() {
            input_ids = input_ids +1;
            var local_input_id = input_ids;
            var user_input = document.getElementById('user_input').value;
            var add_user_input_div = document.getElementById('add_user_input_div');
            var new_user_input = document.createElement('div');
            new_user_input.className = "btn btn_skills";
            new_user_input.style = "width: auto !important;position:relative";


            var new_user_input_content = document.createElement('span');
            new_user_input_content.style = "float:left";
            new_user_input_content.textContent = user_input;

            var new_user_input_content_delete = document.createElement('IMG');
            new_user_input_content_delete.src = "images/icons/Icon-20.png";
            new_user_input_content_delete.style = "position:absolute;top:-15px;right:-15px;width:35px";
            new_user_input_content_delete.textContent = "x";

            new_user_input.id = "div_"+input_ids;

            new_user_input_content_delete.onclick = function () {
              document.getElementById("div_"+local_input_id).remove();

            };

  //          new_user_input.textContent = user_input;

            new_user_input.appendChild(new_user_input_content);
            new_user_input.appendChild(new_user_input_content_delete);

            add_user_input_div.appendChild(new_user_input);
            document.getElementById('user_input').value = "";


          }
        </script>

        <img src="images/icons/Web%20pay-02.png" class="boost_image_web" style="margin-top: 10px;margin-bottom: 10px;width: 100%">
        <img src="images/icons/Payment%203-02.png" class="boost_image_mob" style="margin-top: 10px;margin-bottom: 10px;width: 100%">

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
          <div class="col-lg-3">
            <p style="font-family: font2;margin-bottom: 0px">Package Choosen</p>
            <a class="small_href" href="boost_1.php"><small style="font-family: font2;color: #ea4456;">Change</small></a>
            <p style="font-family: font2;"><span style="font-family: font3">Starter Kit 2 days </span></p>

            <div class="col-lg-9" style="padding-top: 20px">
              <center class="boost_card">
                <p style="font-size: 15pt;font-family: font2">Starter Pack</p>
                <img src="images/icons/Boosting%2015%20Days.png" style="width: 70%;margin-bottom: 10px">
                <center class="text-center">
                  <div style="display: inline-block;">
                    <p style="font-family: font4;font-size: 30pt;float: left;">100</p>
                    <p style="font-family: font3;font-size: 15pt;margin-top: 10px;float: left;">EGP</p>
                  </div>
                </center>
              </center>
            </div>


          </div>

          <div class="col-lg-4">
          </br>
        </br>
            <p style="font-family: font3;margin-bottom: 0px">Reciept:</p>
            <a class="small_href" href="boost_1.php"><small style="font-family: font2;color: #ea4456;"></small></a>


            <div style="background-color: #fff;padding: 20px;box-shadow: 0px 4px 5px rgba(34,34,34,0.2);margin-top: 48px">

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
        <a onclick="function2()"   class="btn btn-change" style="font-size: 14pt;padding-right: 20px;padding-left: 20px;margin-top: 40px">Pay</a>

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


        <a onclick="function2()" class="btn btn-change" style="font-size: 14pt;padding-right: 20px;padding-left: 20px;margin-top: 40px">Pay</a>






    </div>
  </div>






<div id="boost_3">
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


  <div class="row" >
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
