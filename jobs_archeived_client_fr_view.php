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

<?php include_once ('Client_View_Freelancer.php');?>
<!-- Main jumbotron for a primary marketing message or call to action -->


<div class="container" style="margin-top: 30px">
  <!-- Example row of columns -->


  <div class="row" style="margin-top: 0px">

    
    <div class="col-md-5"></div>

    <div class="col-md-2">
      <a href="jobs_archeived_fr_view.php" class="btn btn_specific_selected">
        Completed
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
            <div class="col-lg-3">
              <div class="jobs_card_info">
                <p class="jobs_card_info_desc"><span class="jobs_card_info_title">Budget:</span>3k - 4k EGP</p>

              </div>
            </div>
            <div class="col-lg-3">

<!--              <div class="jobs_card_button" >-->
<!--                <button class="btn btn_open_project">Rate</button>-->
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
