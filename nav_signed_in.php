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

        <a class="navbar-brand" href="services.php">
            <img src="images/icons/inploy-01.png" width="40" style="margin-top: 0px">


        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid #000;margin-top: 0px">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto" style="margin-top: 0px">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 search_form" >
                        <input class="form-control mr-sm-2 nav_bar_search" type="text" placeholder="Search" aria-label="Search" style="">
                    </form>
                </li>
                <li>
                    <button class="btn nav_btn_understand_signin" data-toggle="modal" data-target="#login">
                        Understand
                    </button>
                </li>

                <li class="nav-item" style="margin-top: 5px">
                    <a href="notifications.php" class="inploy_nav_icon"><img src="images/icons/Icon-09.png" width="40"></a>
                </li>
                <li class="nav-item" style="margin-top: 5px">
                    <a href="portfolio_freelancer.php" class="inploy_nav_icon"><img src="images/icons/Icon-03.png" width="40"></a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="inploy_nav_icon"><img src="images/icons/Icon-07.png" width="40"></a>-->
<!--                </li>-->

            </ul>
<!--            <button class="btn nav_btn" data-toggle="modal" data-target="#login">-->
<!--                Log in-->
<!--            </button>-->
            <button class="btn nav_btn" id="profile_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mohamed
            </button>
            <img src="user.jpg" class="rounded-circle" width="40" style="margin-top: 10px">
            <div class="dropdown-menu dropdown_menu_signin contact_menu" aria-labelledby="profile_menu">
                <a class="dropdown-item" href="edit_profile_freelancer.php">Edit Profile</a>
                <a class="dropdown-item" href="edit_portfolio.php">Edit Portfolio</a>
                <a class="dropdown-item" href="account_settings.php">Account Settings</a>
                <a class="dropdown-item" href="#0">Wallet</a>
                <a class="dropdown-item" href="#0">Logout</a>
            </div>

        </div>

    </div>
</nav>

<style>
    .dropdown-item:active{
        background-color: #f1f1f1;
    }
    .dropdown_menu_signin{
        margin-top: 10px;
        right: 80px;
        left: inherit;
    }
    
    .nav_bar_search{
        border-radius: 20px;
        font-size: 10pt;
        /*min-width: 550px ;*/
        width: 550px;
        margin-left: 70px;
        box-shadow: 0px 4px 5px rgba(34,34,34,0.2);
    }

    @media screen and (max-width: 800px)
    {
        .nav_bar_search{
            margin-left: 0px;
            width: 100%;
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
                            <option selected disabled>I am a</option>
                            <option value="Individual">Freelancer</option>
                            <option value="Business">Client</option>

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

                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Category">

                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sub-Category">

                        </div>
                    </div>
                    <div id="bus" style="display: none">
                        <div class="form-group" >

                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Services you are looking for">

                        </div>

                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"><span style="margin-left: 5px">Remember me</span>
                        </label>
                    </div>
                    <button class="btn form_login">Add full information now</button>
                    <div class="form-check">
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