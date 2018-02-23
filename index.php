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
    <link href="cover.css" rel="stylesheet">
  </head>
  <style>
    body{
      background-image: url('Group 304.jpg');
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
      @media screen and (max-width: 1200px) {
        body {
          background-image: url('Group 258.png');
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
      }
    .image-header{
      font-size: 12pt;
      color: #20344d;
      text-shadow: none;
      margin-top: -15px;
      margin-bottom: 20px;
    }

    @media screen and (max-width: 680px) {
      .cover-container{
        margin-top: 100px;
      }
    }


  </style>

  <body >

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <!--<div class="masthead clearfix">-->
            <!--<div class="inner">-->
              <!--<h3 class="masthead-brand">Scouteria</h3>-->
              <!--<nav class="nav nav-masthead">-->
                <!--<a class="nav-link active" href="#">Home</a>-->
                <!--<a class="nav-link" href="#">Features</a>-->
                <!--<a class="nav-link" href="#">Contact</a>-->
              <!--</nav>-->
            <!--</div>-->
          <!--</div>-->

          <div class="inner cover">
            <h1 class="cover-heading">
              <img src="1.png" width="600" class="img-fluid">
            </h1>

            <p class="lead">
              <!--<a href="#" class="btn btn-lg btn-secondary">Sign up Now</a>-->
              <?php

              $servername = "localhost";
              $username = "inployeg";
              $password = "q1w2e3r4t5y6u7i8o9p0";
              $dbname = "inployeg_registration";
              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);

              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $name = $_POST['name'];
              $phone = $_POST['phone'];
              $email = $_POST['email'];
              $work_scope = $_POST['work_scope'];


              if(isset($_POST['name'])){

                $sql = "INSERT INTO registration (full_name,phone,email,work_scope)
VALUES ( '$name', '$phone','$email','$work_scope')";

                if ($conn->query($sql) === TRUE) {
                  echo "Thank you for registering with Inploy.";

                } else {

                  echo "Their seems to be problem, can you please try again!";
                }





              }else{
                echo "
                      
                     
                      <button type=\"button\" class=\"btn btn-inploy\" data-toggle=\"modal\" data-target=\"#myModal\">Create an account</button>
                      
                      ";
              }


              ?>



            </p>
          </div>
          <style>
            .checkbox{
              padding: 20px;
            }
            .btn-inploy{
              background-color: #ea4456;
              color: #fff;

            }

          </style>

          <div class="modal fade" id="myModal" role="dialog" style="margin-top: 50px">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header" style="text-shadow: none;color: #000">

                  <h4 class="modal-title">Create an account</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="text-shadow: none;color: #000;">
                  <form method="post" action=""  style="text-align: left">
                    <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Work Scope</label>
                      <input type="text" name="work_scope" class="form-control">
                    </div>

                    <center>
                      <button type="submit" name='submit' class="btn btn-inploy">Submit</button>
                    </center>


                  </form>
                </div>
                <!--<div class="modal-footer">-->
                  <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <!--</div>-->
              </div>

            </div>
          </div>

          <div class="mastfoot">
            <div class="inner">

            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include_once ("js_include.php")?>
  </body>
</html>
