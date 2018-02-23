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

<?php include_once ('Freelance_Client_POV.php');?>
<!-- Main jumbotron for a primary marketing message or call to action -->


<div class="container" style="margin-top: 30px">
  <!-- Example row of columns -->


  <div class="row" style="margin-top: 0px">

    <div class="col-md-4">
    </div>

    <div class="col-md-2">
      <a href="jobs_archeived_fr_view.php" class="btn btn_specific_selected">
        Archived
      </a>
    </div>


    <div class="col-md-2">
      <a href="jobs_posted_fr_view.php" class="btn btn_specific">
        Posted
      </a>
    </div>





  </div>

  <div class="row" style="margin-top: 40px"></div>

  <div class="row" style="margin-top: 20px">
    <div class="col-md-1">
    </div>
    <div class="col-lg-10">
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
            <div class="col-lg-2">
              <div class="jobs_card_info">
                <p class="jobs_card_info_desc"><span class="jobs_card_info_title">Work:</span>Design a logo</p>
                <p class="jobs_card_info_desc"><span class="jobs_card_info_title">Requested:</span>Freelancer</p>
              </div>
            </div>
            <div class="col-lg-2" style="padding-right: 0px">
              <div class="jobs_card_info">
                <p class="jobs_card_info_desc"><span class="jobs_card_info_title">Budget:</span>3k-4k EGP</p>

              </div>
            </div>
            <div class="col-lg-4">

<!--              <div class="jobs_card_button">-->
<!--                <div >-->
<!--                  <button class="btn btn_open_project" style="position: relative">Applicants-->
<!--                    <div style="position: absolute;;top: -10px;right: -10px;background-color: #ea4456;color: #fff;font-size: 10pt;padding: 5px 6px" class="rounded-circle">20</div>-->
<!--                  </button>-->
<!---->
<!--                  <button class="btn btn_open_project" style="position: relative">Applicants-->
<!--                    <div style="position: absolute;;top: -10px;right: -10px;background-color: #ea4456;color: #fff;font-size: 10pt;padding: 3px 7px" class="rounded-circle">5</div>-->
<!--                  </button>-->
<!---->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="jobs_card_button">-->
<!--                <button class="btn btn_open_project">Apply</button>-->
<!--              </div>-->
              <div class="jobs_card_button">
                <button class="btn btn_open_project" onclick="open_project()">Open Project</button>
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
              <div class="col-lg-12">
                <p class="content_header">Skills Required</p>
                <div class="btn btn_skills">Skillll</div>
                <div class="btn btn_skills">Skillll</div>
              </div>

            </div>

          </div>
          <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
          <div class="card-block card-content" style="padding: 20px">
            <div class="row brief-content">
              <div class="col-lg-4">
                <p class="content_header">Questions</p>
                <p class="number">1</p>
                <p class="content_header">What is the project About</p>
                <p>Rebranding our compnay</p>
              </div>
            </div>
          </div>







          <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
          <div class="card-block card-content" style="padding: 20px">
            <div class="row brief-content">
              <div class="col-lg-12">
                <p class="content_header">Attached Files</p>
                <img class="inspiration" src="user.jpg" width="100" height="100">
                <img class="inspiration" src="user.jpg" width="100" height="100">
                <img class="inspiration" src="user.jpg" width="100" height="100">
                <img class="inspiration" src="user.jpg" width="100" height="100">
              </div>
            </div>
          </div>


          <div class="card-block card-content" style="padding: 20px">
            <div class="row brief-content">

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
              <div class="col-lg-12">
                <p class="content_header">Deadline</p>
                <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              </div>
            </div>
          </div>

          <div style="border-top: 1px solid rgba(0,0,0,0.1)"></div>
          <div class="card-block card-content" style="padding: 20px">
            <div class="row brief-content">
              <div class="col-lg-12">
                <p class="content_header">Freelancer</p>
                <img src="user.jpg" class="img-fluid rounded-circle jobs_card_img" width="80" >
                <div class="jobs_card_info">
                  <a href="portfolio_freelancer_freelancer.php" style="color: #000" class="jobs_card_info_name">Mohamed El Shaer</a>
                  
                  <p class="jobs_card_info_company">Mohamed El Shaer</p>
                </div>
              </div>
            </div>
          </div>




        </div>







      </div>
    </div>
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

  <br><br><br><br><br><br><br><br><br><br>


  

  <?php include_once ('fotter.php');?>




</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include_once ("js_include.php")?>
</body>
</html>
