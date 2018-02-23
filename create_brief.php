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

  </div>
  <!--main profile buttons-->
  <div class="row" style="">



        <div style="width: 100%">

            <p class="header" >
              Create Public Brief
            </p>


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
                <p class="jobs_card_info_company">Mohamed El Shaer</p>
              </div>
            </div>
            <div class="col-lg-5">

            </div>
            <div class="col-lg-3">


            </div>



          </div>

        </div>
        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
<!--        <div class="card-block card-content" style="padding: 20px">-->
<!--          <div class="row brief-content">-->
<!--            <div class="col-lg-4">-->
<!--              <p class="content_header">Brief Code</p>-->
<!--            </div>-->
<!--            <div class="col-lg-5">-->
<!---->
<!--            </div>-->
<!--            <div class="col-lg-3">-->
<!--              <p>XXXXXXXXX</p>-->
<!--            </div>-->
<!---->
<!---->
<!---->
<!--          </div>-->
<!---->
<!--        </div>-->


        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">
            <div class="col-lg-12">
              <p class="content_header" >Project Tile</p>
              <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;">
              <div class="clearfix" style="margin: 10px"></div>



              <p class="content_header">Required Skills</p>
              <input type="text" class="form-control" placeholder="" id="user_input" style="max-width: 300px;float: left;margin-right: 10px">
              <button onclick="add_user_input()" class="btn btn_inploy" style="float: left;margin-left: 10px;">Add</button>
              <div class="clearfix"></div>
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

              <div class="clearfix" style="margin: 10px"></div>
              <p class="content_header">Budget</p>
              <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;">
              <div class="clearfix"></div>

            </div>
          </div>
        </div>

        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">
            <div class="col-lg-4">
              <p class="content_header">Questions</p>
            </div>
          </div>
        </div>



        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">

            <div class="col-lg-4" style="padding-left: 0px">
              <p class="number">1</p>
              <p class="content_header">What is the project About</p>
              <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;margin-left: 50px">
            </div>
          </div>

        </div>

        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">

            <div class="col-lg-4" style="padding-left: 0px">
              <p class="number">2</p>
              <p class="content_header">What is the project About</p>
              <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;margin-left: 50px">
            </div>
          </div>

        </div>

        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">

            <div class="col-lg-4" style="padding-left: 0px">
              <p class="number">3</p>
              <p class="content_header">What is the project About</p>
              <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;margin-left: 50px">
            </div>
          </div>

        </div>

        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">
            <div class="col-lg-4">
              <p class="content_header">Attach File</p>
              <img class="inspiration" src="images/icons/Icon-17.png" width="100" height="100">
            </div>
          </div>
        </div>

        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>

        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">
            <div class="col-lg-4">
              <p class="content_header">Terms & Condition</p>
            </div>
          </div>
        </div>

        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">
            <div class="col-lg-12">
              <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
          </div>
        </div>

        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">
            <div class="col-lg-4">
              <p class="content_header">Deadline</p>
              <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left;">

            </div>
          </div>
        </div>

        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">
            <div class="col-lg-12">
              <img onclick="boost()" class="inspiration" src="images/icons/Icon-22.png" width="100" height="100" style="margin-left: 0px;  cursor: pointer;">
              <p class="header" style="margin-top: 30px;font-size: 17pt;margin-left: 25px">
                Boost your brief
              </p>
              <div class="clearfix"></div>
              <div id="boost" style="display: none">

                <p class="header" style="margin-top: 10px;font-size: 17pt;margin-left: 25px">
                  Choose your package
                </p>
                <p style="margin-left: 25px;    color: #ea4456;">Reach more applicants by having your brief appear first in explore.</p>
                <p style="font-family: font2;margin-left:25px;">Category: <span style="font-family: font3">Graphic Design</span></p>

                <p class="content_header"style="font-family: font2; margin-left:25px;">Subcategories:</p>

                <div class="clearfix"></div>
                <small style="font-family: font2;color:#ea4456;margin-left:25px;">each subcategory costs 20 EGP extra</small>

                  <div class="row" style="padding: 45px">
                    <div class="col-lg-2" style="padding-top: 20px">
                      <center class="boost_card" style="">
                        <p >Starter Pack</p>
                        <img src="images/icons/Boosting%202%20Days.png" style="width: 70%;margin-bottom: 10px">
                        <center class="text-center">
                          <div style="display: inline-block;">
                            <p style="font-family: font4;font-size: 20pt;float: left;">100</p>
                            <p style="font-family: font3;font-size: 8pt;margin-top: 10px;float: left;">EGP</p>
                          </div>
                        </center>
                        <button class="btn btn-change" style="float: none;margin-top: -15px">Select</button>
                      </center>
                    </div>

                    <div class="col-lg-2" style="padding-right: 0px;padding-left: 0px">
                      <center class="boost_card" >
                        <p style="font-family: font4">Recommended</p>
                        <img src="images/icons/Boosting%207%20Days.png" style="width: 70%;margin-bottom: 10px">
                        <center class="text-center">
                          <div style="display: inline-block;">
                            <p style="font-family: font4;font-size: 20pt;float: left;">100</p>
                            <p style="font-family: font3;font-size: 8pt;margin-top: 10px;float: left;">EGP</p>
                          </div>
                        </center>
                        <button class="btn btn-change" style="float: none;font-size: 16pt;margin-top: -15px">Select</button>
                        <div style="height: 12px"></div>
                      </center>
                    </div>

                    <div class="col-lg-2" style="padding-top: 20px">
                      <center class="boost_card">
                        <p>Starter Pack</p>
                        <img src="images/icons/Boosting%2015%20Days.png" style="width: 70%;margin-bottom: 10px">
                        <center class="text-center">
                          <div style="display: inline-block;">
                            <p style="font-family: font4;font-size: 20pt;float: left;">100</p>
                            <p style="font-family: font3;font-size: 8pt;margin-top: 10px;float: left;">EGP</p>
                          </div>
                        </center>
                        <button class="btn btn-change" style="float: none;margin-top: -15px">Select</button>
                      </center>
                    </div>

                  </div>


              </div>
            </div>
          </div>
        </div>
        <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
        <div class="card-block card-content" style="padding: 20px">
          <div class="row brief-content">
            <div class="col-lg-12">
              <button class="btn btn-change" style="font-size: 12pt;padding-left: 20px;padding-right: 20px;margin-bottom: 20px">Post</button>
            </div>
          </div>
        </div>










      </div>
    </div>
  </div>


  <script>
    function boost() {
      var boost = document.getElementById('boost').style.display;
      if(boost == "none"){
        document.getElementById('boost').style.display = "block";
      }else{
        document.getElementById('boost').style.display = "none";
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
