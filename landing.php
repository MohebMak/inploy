<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
  <div class="" style="margin-top: 0px;font-family: font2">

    <div >
      <img src="images/icons/Inploy%20Logo%20Final-01.png"  style="width: 200px;">
      <p>Get started and see how easy it is to get jobs</p>
    </div>
    <div class="row">
      <div class="col-lg-5">
        <div class="input-group" style="margin-top: 20px;width: 600px">
          <input type="text" class="form-control" placeholder="Try 'Graphics designers '"  style="font-size: 18pt;border-radius: 0px;">
          <span class="input-group-btn">

          </span>
          <button class="btn btn_inploy" style="height: 34px;margin-top: 8px !important;">Search</button>
        </div>
        <a style="color: #ea4456;" href="services.php">View all categories</a>
      </div>

    </div>

    <p class="main_header" style="margin-top: 40px">Explore</p>
    <div class="row" style="">

      <div class="col-md-2">
        <button onclick="change_view(this.id)" id="briefs_btn" class="btn btn_user_profile">
          Briefs
        </button>

      </div>


      <div class="col-md-2">
        <button onclick="change_view(this.id)" id="groups_btn" class="btn btn_user_profile_active">
          Groups
        </button>

      </div>

      <div class="col-md-2">
        <button onclick="change_view(this.id)" id="clients_btn" class="btn btn_user_profile">
          Clients
        </button>

      </div>
      <div class="col-md-2">
        <button onclick="change_view(this.id)" id="freelancers_btn" class="btn btn_user_profile">
          Inployee's
        </button>


      </div>
      <div  id="Create_breif_btn" >
        <img onclick=""  src="images/icons/Create_breif-19.png" width="40px">
      </div>



    </div>

    <script>
      function change_view(id) {

        if(id == 'briefs_btn'){
          document.getElementById('freelancers').style.display = "none";
          document.getElementById('clients').style.display = "none";
          document.getElementById('briefs').style.display = "";
          document.getElementById('Create_breif_btn').style.display = "block";

        }else if(id == 'groups_btn'){
          document.getElementById('freelancers').style.display = "none";
          document.getElementById('clients').style.display = "none";
          document.getElementById('briefs').style.display = "none";
          document.getElementById('Create_breif_btn').style.display = "none";

        }else if(id == 'clients_btn'){
          document.getElementById('freelancers').style.display = "none";
          document.getElementById('briefs').style.display = "none";
          document.getElementById('clients').style.display = ""
          document.getElementById('Create_breif_btn').style.display = "block";

        }else if(id == "freelancers_btn"){

          document.getElementById('freelancers').style.display = "";
          document.getElementById('briefs').style.display = "none";
          document.getElementById('clients').style.display = "none"
          document.getElementById('Create_breif_btn').style.display = "none";


        }

//        var view = document.getElementById('filter').style.display;
//        if(filter == "none"){
//          document.getElementById('filter').style.display = "block";
//        }else{
//          document.getElementById('filter').style.display = "none";
//        }


      }
    </script>


  <div id="myCarousel" class="carousel slide" style="width:30%">
     <!-- Indicators -->

     <!-- Wrapper for slides -->
     <div class="carousel-inner">
       <div class="item active">
         <p class="main_header" style="margin-top: 40px">Graphic Designers</p>

       </div>

       <div class="item">
         <p class="main_header" style="margin-top: 40px">Developers</p>
       </div>

       <div class="item">
         <p class="main_header" style="margin-top: 40px">Media</p>
       </div>
     </div>

     <!-- Left and right controls -->

     <a class="right carousel-control" href="#myCarousel" data-slide="next" style="     background: transparent;
    top: 30px;">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
<script type="text/javascript">
$('#myCarousel').carousel({
  interval: false
});
</script>
<div class="slider-client-freelancers">

<button onclick="function11()"id="slider-client" type="button" name="button">Freelancer</button>
<button onclick="function22()"id="slider-freelancers"type="button" name="button">Business</button>
</div>
<script type="text/javascript">
function function11() {
    document.getElementById('slider-client').style.color = "#ea4456";
    document.getElementById('slider-client').style.boxShadow = "0px 0px 8px gray";

    document.getElementById('slider-freelancers').style.color = "black";
      document.getElementById('slider-freelancers').style.boxShadow = "none";
}
  function function22() {
      document.getElementById('slider-client').style.color = "black";
      document.getElementById('slider-client').style.boxShadow = "none";

      document.getElementById('slider-freelancers').style.color = "#ea4456";
      document.getElementById('slider-freelancers').style.boxShadow = "0px 0px 8px gray";

    }



</script>
    <div class="row" style=" margin-top: 10px">

      <div class="col-lg-12">
        <div  class="filter_btn">
          <a onclick="open_filter()" >Filter</a>
        </div>
        <div id="filter" style="display: none">

          <div class="row" style="margin-top: 20px">
            <div class="col-lg-12">
              <p style="font-family: font5">Sub Categories</p>
            </div>
            <div class="col-lg-4">

              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">Remember me</span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">Remember me</span>
                </label>
              </div>




            </div>

            <div class="col-lg-4">

              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">Remember me</span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">Remember me</span>
                </label>
              </div>



            </div>
            <div class="col-lg-4">

              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">Remember me</span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">Remember me</span>
                </label>
              </div>





            </div>






            </div>
          </div>



        </div>
      </div>

    </div>


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

    <div class="row" id="freelancers" style="margin-top: 40px;">



      <a class="col-lg-3">
        <div class="card explore_card" style="margin-top: 20px">
          <div class="card-block" style="padding: 10px">



            <div class="row" style="padding: 0px 10px;margin-bottom: 5px">
              <div class="col-6" style="padding-right: 0px">
                <img src="user.jpg" class="rounded-circle" style="max-width: 100%;border: 10px solid #edc212;">
              </div>
              <div class="col-6" style="padding-left: 0px;padding-right: 0px">
                <div class="row" style="margin-left: 0px;margin-top: 10px">
                  <div class="col-lg-9">
                    <p style="margin: 0;padding: 0px;font-family: font5">Mohamed</p>
                    <p style="margin: 0;font-size: 10pt;padding: 0px">Animator</p>
                    <img src="images/icons/i-18.png" width="60">
                  </div>

                </div>


              </div>
            </div>






          </div>
        </div>

      </a>

      <a class="col-lg-3">
        <div class="card explore_card" style="margin-top: 20px">
          <div class="card-block" style="padding: 10px">



            <div class="row" style="padding: 0px 10px;margin-bottom: 5px">
              <div class="col-6" style="padding-right: 0px">
                <img src="user.jpg" class="rounded-circle" style="max-width: 100%;border: 10px solid #edc212;">
              </div>
              <div class="col-6" style="padding-left: 0px;padding-right: 0px">
                <div class="row" style="margin-left: 0px;margin-top: 10px">
                  <div class="col-lg-9">
                    <p style="margin: 0;padding: 0px;font-family: font5">Mohamed</p>
                    <p style="margin: 0;font-size: 10pt;padding: 0px">Animator</p>
                    <img src="images/icons/i-18.png" width="60">
                  </div>

                </div>


              </div>
            </div>






          </div>
        </div>

      </a>
      <a class="col-lg-3">
        <div class="card explore_card" style="margin-top: 20px">
          <div class="card-block" style="padding: 10px">



            <div class="row" style="padding: 0px 10px;margin-bottom: 5px">
              <div class="col-6" style="padding-right: 0px">
                <img src="user.jpg" class="rounded-circle" style="max-width: 100%;border: 10px solid #edc212;">
              </div>
              <div class="col-6" style="padding-left: 0px;padding-right: 0px">
                <div class="row" style="margin-left: 0px;margin-top: 10px">
                  <div class="col-lg-9">
                    <p style="margin: 0;padding: 0px;font-family: font5">Mohamed</p>
                    <p style="margin: 0;font-size: 10pt;padding: 0px">Animator</p>
                    <img src="images/icons/i-18.png" width="60">
                  </div>

                </div>


              </div>
            </div>






          </div>
        </div>

      </a>
      <a class="col-lg-3">
        <div class="card explore_card" style="margin-top: 20px">
          <div class="card-block" style="padding: 10px">



            <div class="row" style="padding: 0px 10px;margin-bottom: 5px">
              <div class="col-6" style="padding-right: 0px">
                <img src="user.jpg" class="rounded-circle" style="max-width: 100%;border: 10px solid #edc212;">
              </div>
              <div class="col-6" style="padding-left: 0px;padding-right: 0px">
                <div class="row" style="margin-left: 0px;margin-top: 10px">
                  <div class="col-lg-9">
                    <p style="margin: 0;padding: 0px;font-family: font5">Mohamed</p>
                    <p style="margin: 0;font-size: 10pt;padding: 0px">Animator</p>
                    <img src="images/icons/i-18.png" width="60">
                  </div>

                </div>


              </div>
            </div>






          </div>
        </div>

      </a>
      <a class="col-lg-3">
        <div class="card explore_card" style="margin-top: 20px">
          <div class="card-block" style="padding: 10px">



            <div class="row" style="padding: 0px 10px;margin-bottom: 5px">
              <div class="col-6" style="padding-right: 0px">
                <img src="user.jpg" class="rounded-circle" style="max-width: 100%;border: 10px solid #edc212;">
              </div>
              <div class="col-6" style="padding-left: 0px;padding-right: 0px">
                <div class="row" style="margin-left: 0px;margin-top: 10px">
                  <div class="col-lg-9">
                    <p style="margin: 0;padding: 0px;font-family: font5">Mohamed</p>
                    <p style="margin: 0;font-size: 10pt;padding: 0px">Animator</p>
                    <img src="images/icons/i-18.png" width="60">
                  </div>

                </div>


              </div>
            </div>






          </div>
        </div>

      </a>
      <a class="col-lg-3">
        <div class="card explore_card" style="margin-top: 20px">
          <div class="card-block" style="padding: 10px">



            <div class="row" style="padding: 0px 10px;margin-bottom: 5px">
              <div class="col-6" style="padding-right: 0px">
                <img src="user.jpg" class="rounded-circle" style="max-width: 100%;border: 10px solid #edc212;">
              </div>
              <div class="col-6" style="padding-left: 0px;padding-right: 0px">
                <div class="row" style="margin-left: 0px;margin-top: 10px">
                  <div class="col-lg-9">
                    <p style="margin: 0;padding: 0px;font-family: font5">Mohamed</p>
                    <p style="margin: 0;font-size: 10pt;padding: 0px">Animator</p>
                    <img src="images/icons/i-18.png" width="60">
                  </div>

                </div>


              </div>
            </div>






          </div>
        </div>

      </a>
      <a class="col-lg-3">
        <div class="card explore_card" style="margin-top: 20px">
          <div class="card-block" style="padding: 10px">



            <div class="row" style="padding: 0px 10px;margin-bottom: 5px">
              <div class="col-6" style="padding-right: 0px">
                <img src="user.jpg" class="rounded-circle" style="max-width: 100%;border: 10px solid #edc212;">
              </div>
              <div class="col-6" style="padding-left: 0px;padding-right: 0px">
                <div class="row" style="margin-left: 0px;margin-top: 10px">
                  <div class="col-lg-9">
                    <p style="margin: 0;padding: 0px;font-family: font5">Mohamed</p>
                    <p style="margin: 0;font-size: 10pt;padding: 0px">Animator</p>
                    <img src="images/icons/i-18.png" width="60">
                  </div>

                </div>


              </div>
            </div>






          </div>
        </div>

      </a>
      <a class="col-lg-3">
        <div class="card explore_card" style="margin-top: 20px">
          <div class="card-block" style="padding: 10px">



            <div class="row" style="padding: 0px 10px;margin-bottom: 5px">
              <div class="col-6" style="padding-right: 0px">
                <img src="user.jpg" class="rounded-circle" style="max-width: 100%;border: 10px solid #edc212;">
              </div>
              <div class="col-6" style="padding-left: 0px;padding-right: 0px">
                <div class="row" style="margin-left: 0px;margin-top: 10px">
                  <div class="col-lg-9">
                    <p style="margin: 0;padding: 0px;font-family: font5">Mohamed</p>
                    <p style="margin: 0;font-size: 10pt;padding: 0px">Animator</p>
                    <img src="images/icons/i-18.png" width="60">
                  </div>

                </div>


              </div>
            </div>






          </div>
        </div>

      </a>






    </div>

    <div class="row" id="clients" style="display: none">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="row" style="margin-top: 20px">

          <a class="col-lg-3">
            <div class="card explore_card_2" style="margin-top: 20px">
              <div class="card-block" style="padding: 10px">





                <center>
                  <img src="user.jpg" class="rounded-circle" style="" width="80">
                  <p class="jobs_card_info_name" style="margin-top: 10px">Name</p>
                  <img src="images/icons/i-18.png" width="80">
                  <div class="clearfix"></div>
<!--                  <button class="btn btn_open_explore">Full view</button>-->
                </center>

              </div>
            </div>

          </a>
          <a class="col-lg-3">
            <div class="card explore_card_2" style="margin-top: 20px">
              <div class="card-block" style="padding: 10px">





                <center>
                  <img src="user.jpg" class="rounded-circle" style="" width="80">
                  <p class="jobs_card_info_name" style="margin-top: 10px">Name</p>
                  <img src="images/icons/i-18.png" width="80">
                  <div class="clearfix"></div>
<!--                  <button class="btn btn_open_explore">Full view</button>-->
                </center>

              </div>
            </div>

          </a>
          <a class="col-lg-3">
            <div class="card explore_card_2" style="margin-top: 20px">
              <div class="card-block" style="padding: 10px">





                <center>
                  <img src="user.jpg" class="rounded-circle" style="" width="80">
                  <p class="jobs_card_info_name" style="margin-top: 10px">Name</p>
                  <img src="images/icons/i-18.png" width="80">
                  <div class="clearfix"></div>
<!--                  <button class="btn btn_open_explore">Full view</button>-->
                </center>

              </div>
            </div>

          </a>
          <a class="col-lg-3">
            <div class="card explore_card_2" style="margin-top: 20px">
              <div class="card-block" style="padding: 10px">





                <center>
                  <img src="user.jpg" class="rounded-circle" style="" width="80">
                  <p class="jobs_card_info_name" style="margin-top: 10px">Name</p>
                  <img src="images/icons/i-18.png" width="80">
                  <div class="clearfix"></div>
<!--                  <button class="btn btn_open_explore">Full view</button>-->
                </center>

              </div>
            </div>

          </a>
          <a class="col-lg-3">
            <div class="card explore_card_2" style="margin-top: 20px">
              <div class="card-block" style="padding: 10px">





                <center>
                  <img src="user.jpg" class="rounded-circle" style="" width="80">
                  <p class="jobs_card_info_name" style="margin-top: 10px">Name</p>
                  <img src="images/icons/i-18.png" width="80">
                  <div class="clearfix"></div>
<!--                  <button class="btn btn_open_explore">Full view</button>-->
                </center>

              </div>
            </div>

          </a>
          <a class="col-lg-3">
            <div class="card explore_card_2" style="margin-top: 20px">
              <div class="card-block" style="padding: 10px">





                <center>
                  <img src="user.jpg" class="rounded-circle" style="" width="80">
                  <p class="jobs_card_info_name" style="margin-top: 10px">Name</p>
                  <img src="images/icons/i-18.png" width="80">
                  <div class="clearfix"></div>
<!--                  <button class="btn btn_open_explore">Full view</button>-->
                </center>

              </div>
            </div>

          </a>
          <a class="col-lg-3">
            <div class="card explore_card_2" style="margin-top: 20px">
              <div class="card-block" style="padding: 10px">





                <center>
                  <img src="user.jpg" class="rounded-circle" style="" width="80">
                  <p class="jobs_card_info_name" style="margin-top: 10px">Name</p>
                  <img src="images/icons/i-18.png" width="80">
                  <div class="clearfix"></div>
<!--                  <button class="btn btn_open_explore">Full view</button>-->
                </center>

              </div>
            </div>

          </a>
          <a class="col-lg-3">
            <div class="card explore_card_2" style="margin-top: 20px">
              <div class="card-block" style="padding: 10px">





                <center>
                  <img src="user.jpg" class="rounded-circle" style="" width="80">
                  <p class="jobs_card_info_name" style="margin-top: 10px">Name</p>
                  <img src="images/icons/i-18.png" width="80">
                  <div class="clearfix"></div>
<!--                  <button class="btn btn_open_explore">Full view</button>-->
                </center>

              </div>
            </div>

          </a>
    </div>
  </div>
</div>

    <div class="" id="briefs" style="margin-top: 20px;display: none;">

      <div class="row" id="briefs" style="margin-top: 20px;">

      <div class="col-md-1">
      </div>
      <a class="col-lg-12">
        <div class="card jobs_card">
          <div class="card-block" style="padding: 20px">
            <div class="row">
              <div class="col-lg-4">
                <img src="user.jpg" class="img-fluid rounded-circle jobs_card_img" width="80"  style="    border: 10px solid #edc212;">
                <div class="jobs_card_info">
                  <p class="jobs_card_info_name">Mohamed El Shaer</p>
                  <p class="jobs_card_info_company">Mohamed El Shaer</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="jobs_card_info">
                  <p class="jobs_card_info_desc"><span class="jobs_card_info_title">Work:</span>Design a logo</p>
                  <p class="jobs_card_info_desc"><span class="jobs_card_info_title">Requested:</span>Freelancer</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="jobs_card_info">
                  <p class="jobs_card_info_desc"><span class="jobs_card_info_title">Budget:</span>3k - 4k EGP</p>

                </div>
              </div>
              <div class="col-lg-3">

                <div class="jobs_card_button" >
                  <button class="btn btn_open_project" style="font-size: 10pt">Apply</button>
                </div>
                <div class="jobs_card_button">
                  <button class="btn btn_open_project" onclick="open_project()" style="font-size: 10pt">Open Project</button>
                </div>
              </div>



            </div>

          </div>

          <div style="display: none" id="open_project">
            <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
            <div class="card-block card-content" style="padding: 20px">
              <div class="row brief-content">
                <div class="col-lg-4">
                  <p class="content_header">Brief Code</p>
                </div>
                <div class="col-lg-5">

                </div>
                <div class="col-lg-3">
                  <p>XXXXXXXXX</p>
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
                  <p>Rebranding our compnay</p>
                </div>
              </div>

            </div>

            <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
            <div class="card-block card-content" style="padding: 20px">
              <div class="row brief-content">

                <div class="col-lg-4" style="padding-left: 0px">
                  <p class="number">2</p>
                  <p class="content_header">What is the project About</p>
                  <p>Rebranding our compnay</p>
                </div>
              </div>

            </div>

            <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
            <div class="card-block card-content" style="padding: 20px">
              <div class="row brief-content">

                <div class="col-lg-4" style="padding-left: 0px">
                  <p class="number">3</p>
                  <p class="content_header">What is the project About</p>
                  <p>Rebranding our compnay</p>
                </div>
              </div>

            </div>

            <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
            <div class="card-block card-content" style="padding: 20px">
              <div class="row brief-content">
                <div class="col-lg-4">
                  <p class="content_header">Insperation</p>
                </div>
              </div>
            </div>

            <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
            <div class="card-block card-content" style="padding: 20px">
              <div class="row brief-content">
                <img class="inspiration" src="user.jpg" width="100" height="100">
                <img class="inspiration" src="user.jpg" width="100" height="100">
                <img class="inspiration" src="user.jpg" width="100" height="100">
                <img class="inspiration" src="user.jpg" width="100" height="100">
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
                  <p class="content_header">Insperation</p>
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



          </div>







        </div>
      </a>
    </div>
</div>
    <div  class="filter_btn" style="text-align:center; margin-top:50px;">
      <p onclick="" style="font-family: font5;font-size: 14pt;    color: #ea4456;">View All</p>
    </div>
    <script>
      function open_project() {
        var open_project = document.getElementById('open_project').style.display;
        if(open_project == "none"){
          document.getElementById('open_project').style.display = "block";
        }else{
          document.getElementById('open_project').style.display = "none";
        }

      }
    </script>





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
