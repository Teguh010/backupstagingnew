<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/1cb9d8b6c8.js" crossorigin="anonymous"></script>
</head>

<body>

    <div>

        <nav class="navbar my-navbar navbar-light navbar-expand-md bg-faded justify-content-center ">

            <a href="/" class="navbar-brand d-flex w-50 mr-auto"> <img src="<?php echo base_url(); ?>img/smart-jen-logo-horizontal.jpg" width="120" height="50" alt="logo" class="align-bottom"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link " href="#">Explore<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">

                    <li class="nav-item">
                        <?php

                        if ($this->session->userdata('is_logged_in') == 1) {

                            echo '<button class="btn  my-2 my-sm-0 mx-2" type="submit"><a href="' . base_url() . 'site/logout" class="pull-right btn btn-custom">Logout</a></button>';
                        } else {

                            echo '<button class="btn  my-2 my-sm-0 mx-2" type="submit"><a href="' . base_url() . 'site/login" class="pull-right btn btn-custom">Login</a></button>';

                            // echo '<a href="#login" data-toggle="modal">Login</a>';

                        }

                        ?>
                        <!-- <button class="btn  my-2 my-sm-0 mx-2" type="submit">Login</button> -->

                    </li>
                    <li class="nav-item" style="padding-top:6px;">
                        <button class="btn nav-btn-mobile btn-outline-primary my-2  my-sm-0" type="submit">Schedule a demo</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <section class="site-title ">
        <div class="site-background">
            <header class="">
                <div class="section-containt row justify-content-center ">
                    <div class="col-md-6 hero-content">
                        <div class="text-hero-container">
                            <p class="title-hero-text text-white">Our Technology</p>
                            <p class="hero-text">
                                Turpis posuere viverra semper mi. Non dictumst sit sit dolor. Potenti ornare nunc venenatis ac lectus eleifend eros. Adipiscing fermentum massa in magna non quam porttitor sociis. Porttitor id amet, non tincidunt curabitur lectus.
                                <br><br>

                                Diam tincidunt vestibulum eleifend nulla elit, eget. Eu aliquam commodo, nisi pellentesque. Luctus faucibus eget nisl id non, in nunc lacus. Sodales dictum.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 hero-image">
                        <div class="img-wraper">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/technologypage/hero-image.png" alt="" class="icon-timg" style="width: 100%; margin-left: -30px; " />
                        </div>
                        <div class="photo-bg"></div>
                    </div>
                </div>

            </header>
        </div>
    </section>
    <div>
        <div class="isi-content  justify-content-center px-4 ">
            <div class="isi-isi-content  container ">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="section1-container button-content">
                                <div style="padding-left: 0px;">
                                    <p class="title-big-section2  pb-4">Artificial Intelligence</p>
                                    <p class="descrpition-section1">
                                        Content Digitalization / OCR / HTR. Consequat lectus eget ornare eu maecenas laoreet nisl. Tellus pretium dignissim iaculis purus amet. Nulla nullam quisque.
                                    </p>
                                </div>
                            </div>
                            <div class="img-list ">
                                <div class="  pt-3">
                                    <div class=" pt-2" style="color: #312675;">
                                        <p class="title-section2t font-weight-bold">Phasellus leo.</p>
                                        <p class="sub-title-section2t">Nec orci natoque scelerisque suspendisse.</p>

                                    </div>
                                </div>
                                <div class=" pt-3">
                                    <div class=" pt-2" style="color: #312675;">
                                        <p class="title-section2t font-weight-bold">Gravida.</p>
                                        <p class="sub-title-section2t">Semper urna vel interdum viverra ipsum.</p>

                                    </div>
                                </div>
                                <div class=" pt-3">
                                    <div class=" pt-2" style="color:#312675;">
                                        <p class="title-section2t font-weight-bold">Euismod.</p>
                                        <p class="sub-title-section2t">Turpis leo tellus massa nisl. Arcu sit at nisl.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-section2 col-md-6 text-left image-section-all">
                        <img src="<?php echo base_url(); ?>img/smartjenAssets/technologypage/section1-image.png" alt="" class="section2png" />
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="isi-content  justify-content-center px-4  ">
            <div class="isi-isi-content text-center container ">
                <div class="row section3-container ">

                    <div class="img-section2 col-md-6 text-left image-section-all">
                        <img src="<?php echo base_url(); ?>img/smartjenAssets/technologypage/section2-image.png" alt="" class="section2png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="button-content">
                                <div class="text-left">
                                    <p class="title-big-section2  pb-4">Recommendation System </p>
                                    <p class="descrpition-section1">
                                        Interdum habitant aliquam nec curabitur aliquet. Vel mi non augue massa nibh sed at. Nullam proin proin amet cursus sed. Viverra diam fames massa elementum. Id in cursus penatibus at erat. At neque ultrices habitant ornare purus sem ut.
                                    </p>
                                </div>
                            </div>
                            <div class="img-list">
                                <div class=" pt-3">
                                    <div class="pt-2" style=" color: #312675;">
                                        <p class="title-section2t font-weight-bold">In amet.</p>
                                        <p class="sub-title-section2t">Dignissim arcu neque dui, eget eget massa dui dui. <br> Ipsum auctor mauris mi habitant nec. Maecenas sodales non, ac nunc ultrices in. </p>

                                    </div>
                                </div>
                                <div class="pt-3">
                                    <div class="pt-2" style=" color: #312675;">
                                        <p class="title-section2t font-weight-bold">Suspendisse.</p>
                                        <p class="sub-title-section2t">Tellus non nisi, purus integer ipsum, mauris vel ultrices. Mauris,<br> auctor quis magna tincidunt. Turpis duis in sapien egestas lectus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="isi-content  justify-content-center  px-4">
            <div class="isi-isi-content text-center container ">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="button-content " style=" padding-top: 0px;">
                                <div class="text-left title-big-section2b">
                                    <p class="title-big-section2 pb-4">Optical Character Recognition</p>
                                    <p class="descrpition-section1">
                                        Proin et, quis integer dignissim tempus donec id curabitur. Diam diam, <br>integer tellus quis nisi ut massa cras. Urna tempor egestas auctor egestas blandit. <br>

                                        Turpis consectetur sit natoque cursus..
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-section2 col-md-6 text-left image-section-all">
                        <img src="<?php echo base_url(); ?>img/smartjenAssets/technologypage/section3-image.png" alt="" class="section2png" />
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section class="section6">
        <div class=" ">
            <div class="container text-center ">
                <div class="title-section7">
                    <p>Are you ready to transform <br> education process as</p>
                </div>
                <div class="row" style="position: relative; z-index: 100;">
                    <div class="col-md-12">
                        <div class="">
                            <div class="column">

                                <button type="button" class="btn-section6  text-left  btn "> <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/btn-schools.png" alt="" class="img-btn-section6" />
                                    <span class="text-btn">School</span>
                                </button>

                                <button type="button" class="btn-section6 text-left  btn "> <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/btn-lc.png" alt="" class="img-btn-section6" />
                                    <span class="text-btn">Learning </span>
                                </button>

                                <button type="button" class="btn-section6 text-left  btn "> <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/btn-edu.png" alt="" class="img-btn-section6" />
                                    <span class="text-btn"> Educator</span>
                                </button>

                            </div>
                            <div class="column pt-2">
                                <button type="button" class="btn-section6 text-left  btn "> <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/btn-parents.png" alt="" class="img-btn-section6" />
                                    <span class="text-btn">Parents</span>
                                </button>
                                <button type="button" class="btn-section6 text-left  btn "> <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/btn-students.png" alt="" class="img-btn-section6" />
                                    <span class="text-btn">Students</span>
                                </button>
                            </div>
                            <div class="column btn-group-demo">
                                <button class="btn  btn-section6b my-2 my-sm-0" type="submit">Schedule a demo</button>
                                <button class="btn  btn-section6c btn-outline-primary my-2 my-sm-0" type="submit">Contact Us</button>
                            </div>
                        </div>
                    </div>
                    <div class="">

                    </div>
                </div>
                <div class="gallery-box">
                    <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/teachersection7.png" alt="" class="teacher-section7" />
                </div>
            </div>

        </div>
        <!-- <div class="gallery-box bg-success">
            <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/teachersection7.png" alt="" class="teacher-section7" />
        </div> -->
    </section>
    <div class="text-right" style="margin-bottom: -120px; position: relative; z-index: -999;">
        <img style="position: relative; z-index: -999;" src="<?php echo base_url(); ?>img/smartjenAssets/technologypage/background-bottom.png" alt="" class="teacher-section7" />
    </div>

    <section class="footer">
        <div class="container footer-container">
            <div class="footerku row">
                <div class="col-md-3">
                    <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/logofooter.png" class="footer-logo">

                </div>
                <div class="col">
                    <h5>Navigation</h5>
                    <p>Home</p>
                    <p>Explore</p>
                </div>
                <div class="footer-text col">
                    <p class="footer-blank"></p>
                    <p>Technology</p>
                    <p>Resources</p>

                </div>
                <div class="footer-text col">
                    <p class="footer-blank"></p>
                    <p></i>Team</p>
                    <p>Career</p>

                </div>
                <div class="footer-text col">
                    <p class="footer-blank"></p>
                    <p></i>FAQ</p>
                    <p>Partners</p>

                </div>
                <div class="footer-text col">
                    <h5>Contact Us</h5>
                    <p>hello@smartjen.com</p>
                    <p>+65 6513 2688</p>
                </div>
            </div>
            <div class="column social-footer text-center" style="margin-left: -50px">
                <i class="pl-2 fab fa-twitter text-light"></i>
                <i class="pl-2 fab fa-facebook-square text-light"></i>
                <i class="pl-2 fab fa-linkedin text-light"></i>
                <i class="pl-2 fab fa-instagram text-light"></i>
            </div>
            <hr>
            <div class="copyright-wrapper">
                <div class="">
                    <p class="copyright">©2020 SmartJen. All rights reserved. Managed by EasyLearn Pte. Ltd.</p>
                </div>
                <div class="">
                    <div class="row tos-text">
                        <p class="copyright">Terms of Service</p>
                        <p class="copyright">Terms of Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .title-big-section2 {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            /* identical to box height, or 117% */

            color: #312675;
        }

        .title-big-section2b {
            padding: 120px 0;
        }

        .title-section2t {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: 600;
            font-size: 18px;

            color: #312675;
        }

        .sub-title-section2t {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 24px;

            /* identical to box height, or 150% */

            color: #312675;

            opacity: 0.5;
        }

        .title-hero-text {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;

            /* identical to box height, or 117% */

            color: #FFFFFF;
        }

        .my-navbar {
            padding: 0px 70px;
        }

        .copyright-wrapper {
            display: flex;
            justify-content: space-between;

        }

        .img-list {
            padding: 20px 0 0 30px;
            text-align: left;
        }

        .iconsection3 {
            width: 130%;
            height: auto;
            margin-left: -2px;
        }

        .title-section1 {
            color: #312675;
        }

        .descrpition-section1 {
            color: #312675;
            opacity: 0.5;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
        }

        .social-footer {
            padding: 20px 0;
        }

        .gallery-box {
            text-align: right;
        }

        .teacher-section7 {
            margin-bottom: -120px;
            margin-top: -400px;
            position: relative;
            z-index: -10;
        }

        .footer {
            padding: 100px 20px 15px;
            background-image: linear-gradient(233.37deg, #302574 23.58%, #4DBEFB 122.91%);
            color: #fff;
        }

        .footer-logo {
            width: 150px;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .footer h4 {
            text-align: left;
            margin-top: 15px;
            margin-bottom: 25px;
        }

        .footer p {
            font-size: 12px;
            text-align: justify;
            padding-right: 35px;
        }

        .footer .row .fa {
            padding-right: 20px;
            font-size: 15px;
        }

        .footer hr {
            margin-top: 10px;
            background: #efefef;
        }

        .fa-heart {
            margin: 0 5px;
            color: #f44336;
        }

        /* .footer .copyright {
            text-align: center;

        } */

        .title-section7 {
            color: #312675;
        }

        .title-section7 p {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 48px;

            /* or 133% */
            text-align: center;

            color: #312675;
            padding: 20px 0;
        }

        .btn-section6 {
            width: 190px;
            height: 56px;
            padding: 4px 0;
            font-weight: 600;
            color: #312675;
            padding: 5px;
            margin: 6px;
            background: #FAFAFA;
            box-shadow: 0px 10px 20px rgba(55, 70, 145, 0.2);
            border-radius: 8px;
            position: relative;
            z-index: 100;
        }

        .btn-section6 .text-btn {
        
            font-weight: 600;
            color: #312675;
            opacity: 0.5;
        }

        .btn-section6b {
            width: 190px;
            height: 56px;
            padding: 4px 0;
            padding: 5px;
            margin: 6px;
            color: white;
            background: #0FB0F8;
            border-radius: 4px;

        }

        .btn-section6c {
            width: 190px;
            height: 56px;
            padding: 4px 0;
            padding: 5px;
            margin: 6px;
            background: white;
            border-radius: 4px;

        }

        .img-btn-section6 {
            width: 45px;
            height: auto;
            padding: 2px 5px 2px 5px;
            margin-top: 0px;
        }

        .btn-group-demo {
            padding-top: 50px;
        }

        .section6 {
            padding-top: 100px;
        }

        .card-section6 {
            padding-top: 100px;
        }

        .card-title-section6 {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 43px;
            /* identical to box height, or 120% */


            color: #312675;
        }

        .card-body-section5 {
            padding: 0px 10px;
            color: white;
        }

        .card-sub-title-section5 {
            padding: 0px 10px;
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 24px;
            color: white;
        }

        .card-title-section5 {
            color: white;
            padding: 5px 0 0 0;
        }

        /* .stars {
            background-color: red;
        } */

        .stars-container {
            background: linear-gradient(2.69deg, #5D4BD0 -46.74%, #4DBEFB 89.33%);
            border-radius: 8px;
            padding: 2% 0;
        }

        .patners-container {
            background-color: #D5D5D5;
            width: 100vw;
            padding: 2% 0;
        }

        .partners {
            padding: 50px 0;
        }

        .title-content-section4 {
            color: #312675;
        }

        .card-body-section4 {
            padding: 40px 10px 0px 10px;
        }

        .card-title-section4 {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: 600;
            font-size: 18px;

            color: #312675;
        }

        .card-sub-title-section4 {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 24px;
            color: #312675;

            opacity: 0.5;
        }

        .card {
            border: none;
        }

        .image-section4 {
            width: 100%;
            height: auto;
        }

        .users-feedback {
            padding: 0px 0;
        }

        .user-review {
            background-color: transparent;
            text-align: center;
            /* box-shadow: 0 0 10px 0 rgba(0, 0, 100, 0.2); */
            padding-bottom: 50px;
        }

        .user-review p {
            padding: 50px 10px 10px 10px;
        }

        .space {
            padding: 3%;
        }

        .feature-text .first {
            padding: 2% 2% 0%;
            color: white;
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 42px;
        }

        .feature-text .second {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            color: #FFFFFF;

            opacity: 0.5;
        }

        .card-title {
            font-weight: 600;
            font-size: 18px;
            color: #FFFFFF;
        }

        .card-text {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 24px;
            /* or 150% */

            color: #FFFFFF;

            opacity: 0.5;
        }

        .feature-section {
            padding: 100px 0;
        }

        .featrure-container {
            background: linear-gradient(233.37deg, #302574 23.58%, #4DBEFB 122.91%);
        }

        .card-content {
            text-align: center;
            padding: 15px;

        }

        .cardku {
            border: 1px solid white;
            background: transparent;
            width: 350px;
            height: 380px;
            border-radius: 10px;
        }

        .card-img {
            padding: 10% 10% 20%;
        }

        .card-img img {
            width: 20%;
            height: auto;
        }

        .dashed-group1 {
            position: absolute;
            left: 170px;
            top: 650px;
        }

        .dashed-group2 {
            position: absolute;
            right: 600px;
            top: 1350px;

        }

        .dashed-group3 {
            position: absolute;
            right: 620px;
            top: 390px;
            z-index: -10;

        }


        .button-rengen {
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .button-generate {
            position: relative;
            left: 150px;
        }

        /* .video-vector {
            position: relative;
        }

        .video-vector img {
            width: 100%;
        } */

        .video-vector2 img {
            width: 100%;
            margin-left: 30px;
        }

        .circle-group {
            flex-basis: 50%;
            position: absolute;
            z-index: -10;
            right: -5px;
            /* transform: translateX(-50) */
        }

        .circle-group img {
            width: 100%;
        }

        .rectangle-group {
            position: absolute;
            z-index: -10;
            left: 0px;
        }

        .isi-isi-content {
            padding-top: 5%;
        }

        .text-content {
            padding-top: 5%;
            /* max-width: 300px; */
        }

        .site-title {
            /* background: url('../img/smartjenAssets/vector1.png'); */
            background: url('../img/smartjenAssets/explorepage/headerbg.png');
            background-size: cover;
            height: 100vh;
            background-size: 100% 100%;
            /* display: flex; */
            justify-content: center;
            repeat: no-repeat;
        }

        .section-containt {
            width: 1300px;
            margin: 0 auto;
        }

        .text-hero-container {
            padding: 30% 10% 5% 10%;
            margin-right: auto;
        }

        .hero-text {
            text-align: left;

            /* max-width: 70%; */

            font-family: 'Source Sans Pro', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 25px;
            color: #FFFFFF;
        }

        header h1 {
            font-weight: 900;
            font-size: 64px;
            line-height: 75px;
            color: #021718;
            margin-bottom: 24px;
        }

        header p {

            font-size: 24px;
            line-height: 42px;
            color: #021718;
            /* width: 418px; */

            /* margin-bottom: 48px; */
        }

        header a {
            color: #fffffa;
            font-size: 24px;
            text-decoration: none;

            background: #01847f;
            border-radius: 8px;
            padding: 12px 48px;
            display: inline-block;
            transition: 300ms;
        }

        header a:hover {
            transform: translateY(-8px);
        }

        header .hero-image {

            position: relative;
            padding-right: 10%;
        }

        header .hero-image img {

            transition: 300ms;
            position: relative;
            z-index: 100;
        }

        header .hero-image img:hover {
            transform: rotate(-6deg);
        }

        .icon-timg {
            width: 90%;
            height: auto;
            padding-top: 20%;
        }

        .play-button {
            position: absolute;
            top: 400px;
            right: 550px;
        }

        /* header .hero-image .photo-bg {
    background: url("../img/smartjenAssets/videohero.png");
    background-repeat: no-repeat;
    background-size: cover;
    height: 110vh;
    display: flex;
    justify-content: center;
    height: 500px;
    top: 0px;
    } */
        .btn-section {
            padding-left: 10%;
        }


        @media only screen and (max-width: 750px) {
            .site-title {
                /* background: url('../img/smartjenAssets/vector1.png'); */
                background: url('../img/smartjenAssets/vector1.png');
                background-size: cover;
                height: 100vh;
                /* background-size: 100% 100%; */
                /* display: flex; */
                justify-content: center;
                repeat: no-repeat;
            }

            .nav-item {
                text-align: center;
                padding: 5px 0;

            }

            .nav-item {
                text-align: center;

            }

            .nav-item a {
                text-align: center;
                font-family: Source Sans Pro;
                font-style: normal;
                font-weight: 600;
                font-size: 16px;
                /* identical to box height, or 117% */

                color: #312675 !important;

            }

            .nav-btn-mobile {
                height: 48px;
                display: block;
                width: 100%;
            }

            .navbar-collapse {
                height: 100vh;
            }

            .title-big-section2 {
                font-family: Source Sans Pro;
                font-style: normal;
                font-weight: 600;
                font-size: 24px;
                /* identical to box height, or 117% */

                color: #312675;
            }

            .img-list {
                margin: auto;
            }

            .img-list {
                padding: 0px;
                text-align: center;
            }

            .title-big-section2b {
                padding: 0px 0;
            }

            .title-section2t {
                text-align: center;
                justify-content: center;
            }

            .title-big-section2 {
                text-align: center;
            }

            .descrpition-section1 {
                text-align: center;
                justify-content: center;
            }

            .btn-section6b {
                display: block;
                width: 100%;
                height: 48px;
            }

            .title-section7 p {
                font-family: Source Sans Pro;
                padding-top: 0px;
                margin-top: -70px;
                font-weight: 600;
                font-size: 24px;
                line-height: 34px;
            }

            .btn-section6c {

                display: block;
                width: 100%;
                height: 48px;
            }

            .btn-group-demo {
                display: flex;
                flex-direction: column;
                margin-bottom: 50px;

            }

            .btn-section6 {
                width: 145px;
            }

            .gallery-box {
                display: none;
            }

            .section1-container {
                padding-top: 20%;
            }

            .my-navbar {
                padding: 0px 15px;
            }

            .image-section-all {
                padding: 50px 0px;
            }

            .img-section2 img {
                width: 95%;
                height: auto;
            }

            .section3-container {
                display: flex;
                flex-direction: column-reverse;
            }

            .footer-blank {
                display: none;
            }

            .tos-text {
                display: flex;
                justify-content: center;
            }

            .copyright-wrapper {
                flex-direction: column;
                display: grid;
                justify-content: center;
            }

            .copyright-wrapper p {
                text-align: center;
            }

            .footer-logo {
                margin-left: -20px;
            }

            .footer {
                padding: 30px 0px 5px 0px;
            }

            .footerku {
                /* display: flex;
                align-items: center; */
                flex-direction: column;
                display: grid;
                justify-content: center;
                /* text-align: center; */
            }

            .footerku p {
                text-align: center;
            }

            .footerku h5 {
                text-align: center;
                padding-right: 30px;
            }

            .title-hero-text {
                padding-left: 25px;
                text-align: center;

            }

            .hero-text {
                text-align: center;
            }

            .text-hero-container {
                padding-top: 5%;
            }

            .btn-section {
                display: none;
            }

            .icon-timg {
                width: 250px;
                size: auto;
                height: 100%;
                padding-top: 0%;
                top: -20px;
                position: relative;
                right: -35px;
            }

            .hero-text {
                padding: 5% 0% 0% 10%;
            }

            .section-containt {
                width: 100%;
                margin: 0 auto;
            }

            .play-button-phone {
                position: relative;
                top: -70px;
                left: 20px;
                height: 20%;
                width: 20%;
            }

        }

        @media only screen and (min-width: 750px) {
            .play-button-phone {
                display: none;
            }

        }
    </style>
</body>

</html>