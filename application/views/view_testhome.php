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
                        <a class="nav-link" href="#">Explore<span class="sr-only">(current)</span></a>
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
                        <button class="btn btn-outline-primary my-2  my-sm-0" type="submit">Schedule a demo</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <section class="site-title ">
        <div class="site-background">
            <header class="">
                <div class="section-containt row justify-content-center">
                    <div class="col-md-6 hero-content">
                        <p class="hero-text">
                            Education made easy when you can prepare, generate and share worksheets with just a few clicks.
                        </p>
                        <div class="btn-section">
                            <button class="btn btn-light btn-outline-primary my-2 my-sm-0 mx-2" type="submit">Schedule a demo</button>
                            <?php

                            if ($this->session->userdata('is_logged_in') == 1) {

                                echo '<button class="btn  my-2 my-sm-0 mx-2" type="submit"><a href="' . base_url() . 'site/logout" class="pull-right btn btn-custom">Logout</a></button>';
                            } else {

                                echo '<button class="btn  my-0 my-sm-0"><a href="' . base_url() . 'site/login" class="btn text-blue btn-outline-light my-0 my-sm-0">Login</a></button>';
                            }

                            ?>

                        </div>
                    </div>


                    <div class="col-md-6 hero-image">
                        <div class="play-button">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/bigplaybutton.png" alt="" />
                        </div>
                        <div class="img-wraper">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/bigplaybutton.png" alt="" class="play-button-phone" />
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/newteacher.png" alt="" class="icon-timg" />
                        </div>
                        <!-- <img src="<?php echo base_url(); ?>img/smartjenAssets/newteacer.png" alt="" /> -->
                        <div class="photo-bg"></div>
                    </div>
                </div>
                <div>
                    <img src="<?php echo base_url(); ?>img/smartjenAssets/dashedmobilenew1.png" class="dashed-mobile1" alt="" />
                </div>

            </header>
        </div>
    </section>
    <div>
        <div class="col-md-12">
            <div>
                <button style="height: 48px; background-color: #0FB0F8; color: white;" class="btn btn-default btn-block  my-2 " type="submit">Schedule a demo</button>
            </div>
            <div class="pt-1">
                <button style="height: 48px;" class="btn btn-default btn-block  btn-light btn-outline-primary my-2 " type="submit">Learn More</button>
            </div>
        </div>
        <div class="text-content  justify-content-center px-4 ">

            <p class="text-center title-big">How Does it works?</p>
            <div style="background-color: white; position: relative; z-index:10;">
                <p class="text-center sub-title-big " style="color:black;">
                    With the latest technology of SmartGen now, you can ‘smartly generate’ <br> practice questions online instead of traditional way.
                </p>
            </div>
        </div>

        <div class="dashed-group1 col-md-6 text-left">
            <img src="<?php echo base_url(); ?>img/smartjenAssets/dashed-group.png" alt="" class="video-vectorpng" />
        </div>
        <div class="isi-content  justify-content-center  px-4">
            <div class="isi-isi-content text-center ">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="button-content" style=" padding-top: 30px;">
                            <div>
                                <button style="height:35px;" type="button" class="btn btn-primary">1</button>
                            </div>
                            <div class="text-left" style=" padding-left: 30px;">
                                <p class="font-weight-bold title-small">Design</p>
                                <p class="text-left sub-title-small">
                                    Nulla nascetur sodales orci id. In orci lectus rhoncus quisque eros, donec. Donec eu arcu, enim nunc scelerisque ultrices. Cras morbi sodales tristique.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="video-vector col-md-6 text-left">
                        <img src="<?php echo base_url(); ?>img/smartjenAssets/vedeovectornew.png" alt="" class="video-vectorpng" />
                    </div>
                    <!-- <div class=" circle-group">
                        <img src="<?php echo base_url(); ?>img/smartjenAssets/cricle-group2.png" alt="" class="" />
                    </div> -->
                    <div class=" dashed-group2">
                        <img src="<?php echo base_url(); ?>img/smartjenAssets/dashed-group2.png" alt="" class="" />
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=" dashed-group2">
        <img src="<?php echo base_url(); ?>img/smartjenAssets/dashed-group2.png" alt="" class="" />
    </div>
    <div>
        <div class="isi-content  justify-content-center  px-4">
            <div class="isi-isi-content text-center ">
                <div class="row sectionmobile3 ">

                    <div class="video-vector2 col-md-6 text-center">
                        <!-- <div class="button-generate text-left">
                            <button type="button" class="btn button-rengen">Allow Regenerate</button>
                        </div> -->
                        <img src="<?php echo base_url(); ?>img/smartjenAssets/videovector2new2.png" alt="" class="video-vector22" />

                    </div>

                    <div class="col-md-6 text-left">
                        <div class=" dashed-group3">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/dashed-group3.png" alt="" class="" />
                        </div>
                        <div class="button-content" style=" padding-top: 30px;">
                            <div>
                                <button style="height:35px;" type="button" class="btn btn-primary">2</button>
                            </div>
                            <div class="text-left" style="width: 500px; padding-left: 30px;">
                                <p class="font-weight-bold title-small">Costumize</p>
                                <p class="text-left sub-title-small">
                                    Nulla nascetur sodales orci id. In orci lectus rhoncus quisque eros, donec. Donec eu arcu, enim nunc scelerisque ultrices. Cras morbi sodales tristique.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div>
            <div class="isi-content  justify-content-center  px-4">
                <div class="isi-isi-content text-center ">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="button-content" style=" padding-top: 30px;">
                                <div>
                                    <button style="height:35px;" type="button" class="btn btn-primary">3</button>
                                </div>
                                <div class="text-left" style="width: 500px; padding-left: 30px;">
                                    <p class="font-weight-bold title-small">Align</p>
                                    <p class="text-left sub-title-small">
                                        Nulla nascetur sodales orci id. In orci lectus rhoncus quisque eros, donec. Donec eu arcu.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="video-vector col-md-6 text-left">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/rectanglegroupnew.png" alt="" class="video-vectorpng" />
                        </div>
                        <!-- <div class=" circle-group">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/cricle-group2.png" alt="" class="" />
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-section">
        <div class="featrure-container">
            <div class="feature-text text-center">
                <p class="first">Our Feature</p>
                <p class="second pb-2">
                    Simple, yet sophisticated! Create worksheets of different academic levels,<br> topics and difficulties in a few easy steps.
                </p>
            </div>
            <div class=" container justify-content-center">
                <div class="row feature-item ">
                    <div class="card-content col-md-4">
                        <div class="cardku">
                            <div class="card-body">
                                <div class="card-img">
                                    <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/WG.png" alt="" class="" />
                                </div>
                                <p class="card-title">Worksheet Generator</p>
                                <p class="card-text">Stay fresh. With the thousands of categorized questions to choose, you will never have to ask the same question twice.</p>

                            </div>
                        </div>
                    </div>
                    <div class="card-content col-md-4">
                        <div class="cardku">
                            <div class="card-body">
                                <div class="card-img">
                                    <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/OA.png" alt="" class="" />
                                </div>
                                <p class="card-title">Online Assessment</p>
                                <p class="card-text">Left your worksheet behind? Create a new one or load a saved copy in just a few minutes from the cloud. Access the worksheets and progress reports wherever and whenever you want.</p>

                            </div>
                        </div>
                    </div>
                    <div class="card-content col-md-4">
                        <div class="cardku">
                            <div class="card-body">
                                <div class="card-img">
                                    <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/PL.png" alt="" class="" />
                                </div>
                                <p class="card-title">Personalised Learning</p>
                                <p class="card-text">Learning is personal. Utilise the tailored suggestions from the system to select the most appropriate questions based on your student’s performance.</p>

                            </div>
                        </div>
                    </div>
                    <div class="card-content col-md-4">
                        <div class="cardku">
                            <div class="card-body">
                                <div class="card-img">
                                    <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/OrQB.png" alt="" class="" />
                                </div>
                                <p class="card-title">Organized Questionbank </p>
                                <p class="card-text">Stay fresh. With the thousands of categorized questions to choose, you will never have to ask the same question twice.</p>

                            </div>
                        </div>
                    </div>
                    <div class="card-content col-md-4">
                        <div class="cardku">
                            <div class="card-body">
                                <div class="card-img">
                                    <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/HWR.png" alt="" class="" />
                                </div>
                                <p class="card-title">Handwriting Recognition</p>
                                <p class="card-text">Left your worksheet behind? Create a new one or load a saved copy in just a few minutes from the cloud. Access the worksheets and progress reports wherever and whenever you want.</p>

                            </div>
                        </div>
                    </div>
                    <div class="card-content col-md-4">
                        <div class="cardku">
                            <div class="card-body">
                                <div class="card-img">
                                    <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/CVid.png" alt="" class="" />
                                </div>
                                <p class="card-title">Content & Videos</p>
                                <p class="card-text">Learning is personal. Utilise the tailored suggestions from the system to select the most appropriate questions based on your student’s performance.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space"></div>
        </div>
    </div>
    <section class="users-feedback">
        <h1 class="title-content-section4 title-big text-center pb-4">Our Technologies</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4 card-content2 ">
                    <div class="cardku2 " style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url(); ?>img/smartjenAssets/icons/AI.png" alt="Card image cap">
                        <div class="card-body-section4">
                            <p class="card-title-section4">Artificial Intelligence</p>
                            <p class="card-sub-title-section4">Senectus enim eu suspendisse egestas morbi. Id ultrices.</p>
                            <a href="#" style="text-decoration:none; cursor: pointer;" class="  text-primary ">Go somewhere<i class="pl-2 fas fa-long-arrow-alt-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 card-content2">
                    <div class="cardku2 " style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url(); ?>img/smartjenAssets/icons/RS.png" alt="Card image cap">
                        <div class="card-body-section4">
                            <p class="card-title-section4">Recommendation System </p>
                            <p class="card-sub-title-section4">Libero, eleifend in morbi id iaculis. Pellentesque libero.</p>
                            <a href="#" style="text-decoration:none; cursor: pointer;" class="  text-primary ">Go somewhere<i class="pl-2 fas fa-long-arrow-alt-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 card-content2">
                    <div class="cardku2 " style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo base_url(); ?>img/smartjenAssets/icons/OCR.png" alt="Card image cap">
                        <div class="card-body-section4">
                            <p class="card-title-section4">Optical Character Recognition</p>
                            <p class="card-sub-title-section4">Velit eget viverra cras vulputate sapien mi nullam lacinia. Sit.</p>
                            <a href="#" style="text-decoration:none; cursor: pointer;" class="  text-primary ">Go somewhere<i class="pl-2 fas fa-long-arrow-alt-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="patners-container ">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="gallery-box">
                            <p class="pt-2">Our Patners</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="gallery-box">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/google.png" alt="" class="" />
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="gallery-box">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/googlecr.png" alt="" class="" />
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="gallery-box">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/apple.png" alt="" class="" />
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="gallery-box">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/dropbox.png" alt="" class="" />
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="gallery-box">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/aws.png" alt="" class="" />
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="gallery-box">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/office.png" alt="" class="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="users-feedback">
        <div class="container text-left">
            <div class="row">
                <div class="card-section6 col-md-6">
                    <div class="cardku3">
                        <div class="card-body-section4">
                            <p class="card-title-section6 title-big">Our Costumer</p>
                            <p class="card-sub-title-section4">Scelerisque et sollicitudin risus, volutpat. Nibh consectetur in aliquam purus, ridiculus a, sed tristique. Consectetur turpis at a scelerisque quis. </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body-section4">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/costumergroup.png" alt="" class="" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stars">
        <div class=" ">
            <div class="container text-center stars-container ">
                <div class="py-4 text-white">
                    <h5>Here’s why SmartJen is the best <br> platform for education</h5>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="gallery-box">
                            <div class="column">
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star-half-alt text-light"></i>
                            </div>
                            <p class="card-title-section5">4.5 Ryan Curtis</p>
                            <div class="card-body-section5">

                                <p class="card-sub-title-section5">"Velit eget viverra cras vulputate sapien mi nullam lacinia. Sit."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-box">
                            <div class="column">
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star-half-alt text-light"></i>
                            </div>
                            <p class="card-title-section5">4.5 Ryan Curtis</p>
                            <div class="card-body-section5">

                                <p class="card-sub-title-section5">"Velit eget viverra cras vulputate sapien mi nullam lacinia. Sit."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-box">
                            <div class="column">
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star text-light"></i>
                                <i class="fas fa-star-half-alt text-light"></i>
                            </div>
                            <p class="card-title-section5">4.5 Ryan Curtis</p>
                            <div class="card-body-section5">

                                <p class="card-sub-title-section5">"Velit eget viverra cras vulputate sapien mi nullam lacinia. Sit."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section6">
        <div class=" ">
            <div class="container text-center ">
                <div class=" title-section7">
                    <p class="title-big">Are you ready to transform <br> education process as</p>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="">
                            <div class="column">

                                <button type="button" class="btn-section6  text-left shadow btn btn-light"> <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/btn-schools.png" alt="" class="img-btn-section6" />Light</button>

                                <button type="button" class="btn-section6 text-left shadow btn btn-light"> <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/btn-lc.png" alt="" class="img-btn-section6" />Light</button>

                                <button type="button" class="btn-section6 text-left shadow btn btn-light"> <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/btn-edu.png" alt="" class="img-btn-section6" />Light</button>

                            </div>
                            <div class="column pt-2">
                                <button type="button" class="btn-section6 text-left shadow btn btn-light"> <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/btn-parents.png" alt="" class="img-btn-section6" />Light</button>
                                <button type="button" class="btn-section6 text-left shadow btn btn-light"> <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/btn-students.png" alt="" class="img-btn-section6" />Light</button>
                            </div>
                            <div class="row btn-bottom pt-4 justify-content-center">
                                <div class=" px-2">
                                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Schedule a demo</button>
                                </div>
                                <div class=" px-2">
                                    <button class="btn btn-contact btn-outline-primary my-2 my-sm-0" type="submit">Contact Us</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md section7class">
                        <div class="gallery-box">
                            <img src="<?php echo base_url(); ?>img/smartjenAssets/icons/teachersection7.png" alt="" class="teacher-section7" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

        .title-small {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 23px;

            /* identical to box height */

            color: #312675;
        }

        .sub-title-small {

            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 24px;

            /* or 150% */

            color: #312675;

            opacity: 0.5;
        }

        .sub-title-big {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 24px;

            /* or 133% */
            text-align: center;

            color: #312675;

            opacity: 0.5;
        }

        .title-big {
            font-family: Source Sans Pro;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 42px;

            /* identical to box height, or 117% */

            color: #312675;
        }

        .my-navbar {
            padding: 0px 70px;
        }

        .copyright-wrapper {
            display: flex;
            justify-content: space-between;

        }

        .social-footer {
            padding: 20px 0;
        }

        .teacher-section7 {
            margin-bottom: -200px;
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
            margin 0 5px;
            color: #f44336;
        }

        /* .footer .copyright {
            text-align: center;

        } */

        .title-section7 {
            color: #312675;
        }

        .btn-section6 {
            width: 140px;
            height: 40px;
            padding: 4px 0;
        }

        .img-btn-section6 {
            width: 35px;
            height: auto;
            padding: 0 5px 2px 3px;
            margin-top: 0px;
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
            padding: 5% 2% 0%;
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
            margin: auto;
        }

        .card-content2 {
            text-align: left;
            padding: 15px;
        }

        .cardku2 {

            margin: auto;
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
            right: 650px;
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

        .video-vector {
            position: relative;
            right: -30px;
        }

        .video-vector img {
            width: 100%;
        }

        .video-vector2 img {
            width: 100%;
            position: relative;
            left: -15px;
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

        .button-content {
            display: inline-flex;
        }

        .isi-content {}

        .text-content {
            padding-top: 5%;
            /* max-width: 300px; */
        }

        .site-title {
            /* background: url('../img/smartjenAssets/vector1.png'); */
            background: url('../img/smartjenAssets/vector1.png');
            background-size: cover;
            height: 90vh;
            background-size: 100% 100%;
            /* display: flex; */
            justify-content: center;
            repeat: no-repeat;
        }

        .section-containt {
            width: 1300px;
            margin: 0 auto;
        }

        .hero-text {
            padding: 30% 0% 5% 10%;
            /* max-width: 70%; */
            margin-right: auto;
            font-family: 'Source Sans Pro', sans-serif;
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 40px;
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

            margin-bottom: 48px;
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
                height: 80vh;
                /* background-size: 100% 100%; */
                /* display: flex; */
                justify-content: center;
                repeat: no-repeat;
            }

            .section7class {
                display: none;
            }

            .btn-bottom {
                padding: 0 5px 40px;
                display: flex;
                flex-direction: column;
            }

            .btn-bottom .btn {
                display: block;
                width: 100%;
                height: 48px;
                background-color: #0FB0F8;
                color: white;
            }

            .btn-bottom .btn-contact {
                background-color: white;
                color: blue;
            }

            .feature-text .first {
                padding: 15% 2% 0%;
                color: white;
                font-family: Source Sans Pro;
                font-style: normal;
                font-weight: normal;
                font-size: 24px;
                line-height: 42px;
            }

            .feature-text .second {
                font-family: Source Sans Pro;
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                color: #FFFFFF;

                opacity: 0.5;
            }

            .sub-title-small {
                margin-left: -60px;
            }

            .title-big {
                Font-Size: 24px;
                font-weight: 600;
            }

            .sub-title-big {
                Font-Size: 14px;
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

            .footer-blank {
                display: none;
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

            .text-content {
                padding-top: 20%;
                /* max-width: 300px; */
            }

            .card-content2 {
                text-align: center;
                padding: 15px;
            }

            .card-section6 {
                padding-top: 0px;
                text-align: center;
            }

            .cardku3 {
                margin: auto;
            }

            .dashed-mobile1 {
                position: relative;
                top: -50px;
                z-index: 0;
                left: 24px;
            }

            .dashed-group1 {
                display: none;
            }

            .circle-group {
                /* flex-basis: 50%; */
                position: absolute;
                z-index: -10;
                top: 1100px;
                right: -200px;
                /* transform: translateX(-50) */
            }

            .circle-group img {
                width: 50%;
                height: auto;
            }

            .video-vector {
                position: relative;
                display: flex;
                right: 40px;
            }

            .video-vector img {
                width: 140%;
            }

            .sectionmobile3 {
                display: flex;
                flex-direction: column-reverse;
            }

            .video-vector2 img {
                width: 135%;
                margin-left: -73px;
            }

            .video-vector2 {
                /* display: grid; */
                /* justify-content: center; */
            }

            /* .video-vector22 {
                width: 200%;
                height: auto;
            } */
            .button-generate {
                position: relative;
                left: 100px;
            }

            .my-navbar {
                padding: 0px 15px;
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

        @media only screen and (max-height: 668px) {
            .dashed-mobile1 {
                top: -65px !important;
                /* display: none; */
            }

        }

        @media only screen and (max-height: 813px) {
            .dashed-mobile1 {
                top: 35px;
            }

        }

        @media only screen and (max-height: 737px) {
            .dashed-mobile1 {
                top: -35px;
            }

        }
    </style>
</body>

</html>