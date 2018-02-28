<?php
/**
 * Created by PhpStorm.
 * User: m.elshaer
 * Date: 11/14/17
 * Time: 11:56 PM
 */

?>

<nav class="navbar navbar-expand-md bg-white" style="padding: 0px 50px;background-color: transparent !important;">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="images/icons/Icon-01.png" width="40" style="padding-top: 6px">
        </a>


        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto" style="margin-top: -6px">
                <li class="nav-item nav-item1">
                    <form class="form-inline my-2 my-lg-0 search_form" >
                        <input class="form-control mr-sm-2 nav_bar_search" type="text" placeholder="Search" aria-label="Search" style="">
                    </form>
                    <button class="btn nav_btn_understand" data-toggle="modal" data-target="#login">
                        Understand
                    </button>
                </li>

<!--                <li class="nav-item">-->
<!--                    <a class="inploy_nav_icon"><img src="images/icons/Icon-09.png" width="40"></a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="inploy_nav_icon"><img src="images/icons/Icon-03.png" width="40"></a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="inploy_nav_icon"><img src="images/icons/Icon-07.png" width="40"></a>-->
<!--                </li>-->

            </ul>
            <div class="nav-login">

            <button class="btn nav_btn nav_btn1" data-toggle="modal" data-target="#login">
                Log in
            </button>
            <button class="btn nav_btn nav_btn1" data-toggle="modal" data-target="#reg">
                Sign up
            </button>
          </div>

        </div>

    </div>
</nav>

<style>
    .nav_bar_search{
        border-radius: 20px;
        font-size: 10pt;
        width: 550px;
        margin-left: 70px;
        box-shadow: 0px 4px 5px rgba(34,34,34,0.2);
    }

    @media screen and (max-width: 800px)
    {
        .nav_bar_search{
            margin-left: 0px;
            width:200px !important;

        }


    }

</style>


<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(32,52,77,0.95);font-family: font2">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" style="padding-right: 20px;padding-left: 20px">
            <div class="">
                <center>
                    <img style="padding-top: 15px" src="logo.png" width="160">
                </center>


                <button style="float: right;margin-top: -60px;margin-right: 10px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <button class="fb_login">Login with Facebook</button>
                <button class="fb_login">Login with Linked In</button>
                <hr>
                <form>
                    <div class="form-group">

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">

                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">Remember me</span>
                        </label>
                    </div>
                    <button class="btn form_login">Login</button>


                </form>


            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(32,52,77,0.95);font-family: font2">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding-left: 20px;padding-right: 20px">
            <div class="">


                        <center>
                            <img style="padding-top: 15px" src="logo.png" width="160">
                        </center>


                <button style="float: right;margin-top: -60px;margin-right: 10px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <button class="fb_login">Login with Facebook</button>
                <button class="fb_login">Login with Linked In</button>
                <hr>
                <form>
                    <div class="form-group">
                        <select onchange="change_signup(this.value)" class="form-control" id="type">
                            <option selected disabled>I am looking to</option>
                            <option value="Individual">Hire an Inployee</option>
                            <option value="Business">Work on Inploy</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="type">
                            <option selected disabled>Choose type</option>
                            <option value="Individual">Individual</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">

                    </div>
                    <div class="form-group">

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">

                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">

                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Password">

                    </div>
                    <div id="ind" style="display: none">
                        <div class="form-group" >

                            <div class="form-group">

                                <select  onchange="add_category()" class="form-control" id="user_input">
                                    <option disabled selected>Choose Categories</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <div id="add_user_input_div"></div>
                            </div>

                        </div>
                        <script>

                            var input_ids = 0;

                            function add_category() {
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
//                                document.getElementById('user_input').value = "";


                            }
                        </script>
                        <div class="form-group" >

                            <div class="form-group">

                                <select onchange="add_subcategory()" class="form-control" id="user_input_2">
                                    <option disabled selected>Choose Subcategories</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <div id="add_user_input_div_2"></div>
                            </div>

                        </div>
                        <script>

                            var input_ids_2 = 0;

                            function add_subcategory() {
//                            input_ids_2 = input_ids_2 +1;
                                var local_input_id_2 = input_ids_2 +1;
                                var user_input_2 = document.getElementById('user_input_2').value;
                                var add_user_input_div_2 = document.getElementById('add_user_input_div_2');
                                var new_user_input_2 = document.createElement('div');
                                new_user_input_2.className = "btn btn_skills";
                                new_user_input_2.style = "width: auto !important;position:relative";


                                var new_user_input_content_2 = document.createElement('span');
                                new_user_input_content_2.style = "float:left";
                                new_user_input_content_2.textContent = user_input_2;

                                var new_user_input_content_delete_2 = document.createElement('IMG');
                                new_user_input_content_delete_2.src = "images/icons/Icon-20.png";
                                new_user_input_content_delete_2.style = "position:absolute;top:-15px;right:-15px;width:35px";
                                new_user_input_content_delete_2.textContent = "x";

                                new_user_input_2.id = "div_2_"+local_input_id_2;

                                new_user_input_content_delete_2.onclick = function () {
                                    document.getElementById("div_2_"+local_input_id_2).remove();

                                };

//          new_user_input.textContent = user_input;

                                new_user_input_2.appendChild(new_user_input_content_2);
                                new_user_input_2.appendChild(new_user_input_content_delete_2);

                                add_user_input_div_2.appendChild(new_user_input_2);
//                            document.getElementById('user_input').value = "";


                            }
                        </script>
                    </div>

                    <div id="bus" style="display: none">
                        <div class="form-group" >

                            <div class="form-group">

                                <select onchange="add_subcategory3()" class="form-control" id="user_input_3">
                                    <option disabled selected>Choose Subcategories</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <div id="add_user_input_div_3"></div>
                            </div>

                        </div>

                        <script>

                            var input_ids_3 = 0;

                            function add_subcategory3() {
//                            input_ids_2 = input_ids_2 +1;
                                var local_input_id_3 = input_ids_3 +1;
                                var user_input_3 = document.getElementById('user_input_3').value;
                                var add_user_input_div_3 = document.getElementById('add_user_input_div_3');
                                var new_user_input_3 = document.createElement('div');
                                new_user_input_3.className = "btn btn_skills";
                                new_user_input_3.style = "width: auto !important;position:relative";


                                var new_user_input_content_3 = document.createElement('span');
                                new_user_input_content_3.style = "float:left";
                                new_user_input_content_3.textContent = user_input_3;

                                var new_user_input_content_delete_3 = document.createElement('IMG');
                                new_user_input_content_delete_3.src = "images/icons/Icon-20.png";
                                new_user_input_content_delete_3.style = "position:absolute;top:-15px;right:-15px;width:35px";
                                new_user_input_content_delete_3.textContent = "x";

                                new_user_input_3.id = "div_3_"+local_input_id_3;

                                new_user_input_content_delete_3.onclick = function () {
                                    document.getElementById("div_3_"+local_input_id_3).remove();

                                };

//          new_user_input.textContent = user_input;

                                new_user_input_3.appendChild(new_user_input_content_3);
                                new_user_input_3.appendChild(new_user_input_content_delete_3);

                                add_user_input_div_3.appendChild(new_user_input_3);
//                            document.getElementById('user_input').value = "";


                            }
                        </script>

                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">Remember me</span>
                        </label>
                    </div>
                    <button class="btn form_login">Add full information now</button>
                    <div class="form-check" style="margin-top: 10px">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">I'll do it later</span>
                        </label>
                    </div>
                    <small>asdaskd askdn askjd askdj askd askd</small>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">I Agree</span>
                        </label>
                    </div>
                    <button class="btn form_login">Save</button>


                </form>


            </div>

        </div>
    </div>
</div>
<script>
    function change_signup(type) {
            if(type == 'Individual'){
                document.getElementById('ind').style.display = 'block';
                document.getElementById('bus').style.display = 'none';
            }else{
                document.getElementById('bus').style.display = 'block';
                document.getElementById('ind').style.display = 'none';
        }

    }
</script>

<style>

</style>
