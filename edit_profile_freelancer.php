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



        <div style="width: 100%">

            <p class="header" >
              Edit Profile (Freelancer)
            </p>


        </div>



  </div>
  <div style="margin-top: 40px">
    <img src="images/icons/Icon-17.png" width="80"> <span style="font-family: font2;margin-left: 10px">Upload that beautiful face</span>
    <button class="btn btn-change" style="font-size: 15pt;padding: 10px 20px;margin-left: 0px;display:inline-block;float:none;margin-left:180px;">Get Verified</button>


  </div>
  <p style="font-family: font2;font-size: 16pt;margin-top: 30px">
    Service Information
  </p>


  <div class="row" style="margin-top: 20px">

    <div class="col-lg-12">
      <div class="" style="font-family: font2">








            <div class="clearfix" style=""></div>
            <div class="form-group">
              <label style="float: none;" class="label_settings">Profession</label>
              <textarea style="max-width: 300px" class="form-control" id="exampleTextarea" rows='1'></textarea>
            </div>
            <label style="float: none;" class="label_settings">About</label>
            <textarea style="max-width: 900px" class="form-control" id="exampleTextarea"rows="6" ></textarea>





        <div id="ind" style="">
          <div class="form-group" >

            <div class="form-group">
              <label style="float: none" class="label_settings">Categories</label>
              <select  onchange="add_category_4()" class="form-control" id="user_input_4" style="max-width: 300px">
                <option disabled selected>Choose Categories</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div id="add_user_input_div_4"></div>
            </div>

          </div>
          <script>

            var input_ids_4 = 0;

            function add_category_4() {
              var local_input_id_4 = input_ids_4 +1;
              var user_input_4 = document.getElementById('user_input_4').value;
//              var user_input_4 = document.getElementById('user_input_4').value;
              var add_user_input_div_4 = document.getElementById('add_user_input_div_4');
              var new_user_input_4 = document.createElement('div');
              new_user_input_4.className = "btn btn_skills";
              new_user_input_4.style = "width: auto !important;position:relative";


              var new_user_input_content_4 = document.createElement('span');
              new_user_input_content_4.style = "float:left";
              new_user_input_content_4.textContent = user_input_4;

              var new_user_input_content_delete_4 = document.createElement('IMG');
              new_user_input_content_delete_4.src = "images/icons/Icon-20.png";
              new_user_input_content_delete_4.style = "position:absolute;top:-15px;right:-15px;width:35px";
              new_user_input_content_delete_4.textContent = "x";

              new_user_input_4.id = "div__4"+local_input_id_4;

              new_user_input_content_delete_4.onclick = function () {
                document.getElementById("div__4"+local_input_id_4).remove();

              };

//          new_user_input.textContent = user_input;

              new_user_input_4.appendChild(new_user_input_content_4);
              new_user_input_4.appendChild(new_user_input_content_delete_4);

              add_user_input_div_4.appendChild(new_user_input_4);
//                                document.getElementById('user_input').value = "";


            }
          </script>
          <div class="form-group" >

            <div class="form-group">
              <label style="float: none" class="label_settings">Subcategories</label>
              <select onchange="add_subcategory_5()" class="form-control" id="user_input_5" style="max-width: 300px">
                <option disabled selected>Choose Subcategories</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div id="add_user_input_div_5"></div>
            </div>

          </div>
          <script>

            var input_ids_5 = 0;

            function add_subcategory_5() {
//                            input_ids_2 = input_ids_2 +1;
              var local_input_id_5 = input_ids_5 +1;
              var user_input_5= document.getElementById('user_input_5').value;
              var add_user_input_div_5 = document.getElementById('add_user_input_div_5');
              var new_user_input_5 = document.createElement('div');
              new_user_input_5.className = "btn btn_skills";
              new_user_input_5.style = "width: auto !important;position:relative";


              var new_user_input_content_5 = document.createElement('span');
              new_user_input_content_5.style = "float:left";
              new_user_input_content_5.textContent = user_input_5;

              var new_user_input_content_delete_5 = document.createElement('IMG');
              new_user_input_content_delete_5.src = "images/icons/Icon-20.png";
              new_user_input_content_delete_5.style = "position:absolute;top:-15px;right:-15px;width:35px";
              new_user_input_content_delete_5.textContent = "x";

              new_user_input_5.id = "div_5_"+local_input_id_5;

              new_user_input_content_delete_5.onclick = function () {
                document.getElementById("div_5_"+local_input_id_5).remove();

              };

//          new_user_input.textContent = user_input;

              new_user_input_5.appendChild(new_user_input_content_5);
              new_user_input_5.appendChild(new_user_input_content_delete_5);

              add_user_input_div_5.appendChild(new_user_input_5);
//                            document.getElementById('user_input').value = "";


            }
          </script>
        </div>


        <label style="float: none" class="label_settings">How do you charge</label>
        <select onchange="rate(this.value)" class="form-control" style="max-width: 300px">
          <option disabled selected>Choose Rate</option>
          <option>Per Hour</option>
          <option>Per Project</option>
        </select>
        <input type="text" class="form-control" id="rate_hour"  style="max-width: 300px;float: left;display: none;margin-top: 15px" placeholder="rate / hour">

        <script>
          function rate(rate) {

            if(rate == "Per Hour"){
              document.getElementById('rate_hour').style.display = "";
            }else{
              document.getElementById('rate_hour').style.display = "none";
            }



          }
        </script>




        <div class="clearfix" style="padding: 10px"></div>

        <label style="float: none" class="label_settings">Phone</label>
        <div class="clearfix" style=""></div>
        <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left">

        <div class="clearfix" style="padding: 20px"></div>

        <label style="float: none" class="label_settings">Add Website</label>
        <div class="clearfix" style=""></div>
        <input type="text" class="form-control" placeholder="" style="max-width: 300px;float: left">

        <div class="clearfix" ></div>

        <div class="clearfix" style="padding: 10px"></div>
        <label style="float: none" class="label_settings">Country</label>
        <select  class="form-control" style="max-width: 300px">
          <option disabled selected>Choose Country</option>
          <option>Per Hour</option>
          <option>Per Project</option>
        </select>

        <div class="clearfix" ></div>

        <div class="clearfix" style="padding: 10px"></div>
        <label style="float: none" class="label_settings">City</label>
        <select  class="form-control" style="max-width: 300px">
          <option disabled selected>Choose City</option>
          <option>Per Hour</option>
          <option>Per Project</option>
        </select>

        <div class="clearfix" ></div>

        <div class="clearfix" style="padding: 10px"></div>
        <label style="float: none" class="label_settings">Area</label>
        <select  class="form-control" style="max-width: 300px">
          <option disabled selected>Choose Area</option>
          <option>Per Hour</option>
          <option>Per Project</option>
        </select>

      

        <div class="clearfix" style="padding: 20px"></div>
        <p style="font-family: font2;font-size: 16pt;margin-top: 30px">
          Edit Portfolio
        </p>

        <span style="font-family: font1;">To find the perfect match for you let's show the world what you can do by creating your portfolio</span>


        <div class="clearfix" style="padding: 20px"></div>


        <div style="margin-top: 0px">
          <img src="images/icons/Icon-18.png" width="130"> <span style="font-family: font2;margin-left: 10px">Upload work</span>
        </div>




        <div class="clearfix" style="padding: 20px"></div>
        <button class="btn btn-change_2" style="font-size: 15pt;padding: 10px 20px">Save</button>


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
