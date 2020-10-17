<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <script src="https://kit.fontawesome.com/1cb9d8b6c8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        /*!
 * Start Bootstrap - Simple Sidebar (https://startbootstrap.com/templates/simple-sidebar)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-simple-sidebar/blob/master/LICENSE)
 */

        #wrapper {
            overflow-x: hidden;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }

        div.report_div_header {
            background: #fff;
            color: rgba(49, 38, 117, 1);
            border-radius: 5px 5px 0px 0px;
            text-align: center;
            min-height: 40px;
            padding-top: 2px;
            font-family: 'Source Sans Pro', sans-serif;
        }

        h4.font-bold {
            font-weight: bold;
        }

        div.worksheet_div,
        div.profile_div {
            box-shadow: 0px 3px 5px #999999;
            border-radius: 5px;
        }

        div.worksheet_div_header,
        div.profile_div_header {
            background: linear-gradient(to right, #09B0E6, #55BF99);
            color: #eeeeee;
            border-radius: 5px 5px 0px 0px;
            text-align: center;
            min-height: 40px;
            padding-top: 2px;
        }

        ul.nav.nav-tabs {
            background: #cccccc30;
        }

        .font-nav {
            font-family: 'Lato', sans-serif;
            color: rgba(49, 38, 117, 1);
        }

        .font {
            font-family: 'Lato', sans-serif;
            color: rgba(49, 38, 117, 1);
        }

        .rounded {
            border-radius: 5px;
        }

        i.fa.fa-download {
            margin-right: 5px;
            color: rgba(15, 176, 248, 1);
        }

        .ab {
            position: relative;
            text-align: center;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            background-color: rgb(239, 239, 239);
            background-image: linear-gradient(-62deg, transparent 50%, rgb(239, 239, 239) 50%), linear-gradient(90deg, rgb(217, 83, 79) 50%, transparent 50%);
        }

        .cir {
            position: relative;
            top: 2px;
            left: 2px;
            text-align: center;
            width: 96px;
            height: 96px;
            border-radius: 100%;
            background-color: rgb(255, 255, 255);
        }

        .perc {
            display: block;
            width: 100px;
            height: 100px;
            line-height: 100px;
            vertical-align: middle;
            font-size: 15px;
            font-weight: normal;
            color: rgb(92, 147, 200);
        }

        i.fa.fa-download {
            margin-right: 5px;
            color: rgba(15, 176, 248, 1);
        }

        .togle-side {
            cursor: pointer;
            text-decoration: none !important;
        }

        .list-group panel.active {
            background-color: blue;
            ;
            border-color: #aed248;
        }

        .list-group a {
           text-decoration: none !important;
        }
    </style>

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-white border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><a class="togle-side" href="" id="menu-togglel"> <i class="pr-2 fas fa-long-arrow-alt-left"></i>Performance </a> </div>
            <div class="list-group panel list-group-flush">
                <a href="#" class="list-group-item active" onclick="activate(this)">Individual Performance</a>
                <a href="#" class="list-group-item" onclick="activate(this)">Group Performance</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-light">Group Performance</a> -->
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="background: #E5E5E5;">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom pt-0 pb-0">
                <button class="btn" id="menu-toggle"><a href="#" class="pull-left"><img style="width:150px;" src="<?php echo base_url(); ?>img/<?php echo BRANCH_LOGO; ?>"></a></button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="profile_div bg-white">
                            <div class="report_div_header">
                                <i class="fa fa-minus pull-right fa_minimize_div"></i>
                                <h4 class=" text-left pl-3 font-bold">Performance page</h4>
                            </div>

                            <div class="profile_div_body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active font-nav" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Performance by Worksheet</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Performance by Topic</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Performance by Ability</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="font">
                                            <th>
                                                <label for="SubjectLevel">Subject Level</label>
                                                <select name="subject" id="subject" class="pr-4 pt-2 pb-2 ml-2 rounded">
                                                    <option value="#">Secondary maths</option>
                                                    <option value="#">2</option>
                                                    <option value="#">3</option>
                                                    <option value="#">4</option>
                                                </select>
                                            </th>
                                            <th>
                                                <label for="group">Group</label>
                                                <select name="group" id="group" class="pr-4 pt-2 pb-2 ml-2 rounded">
                                                    <option value="#">All Students</option>
                                                    <option value="#">2</option>
                                                    <option value="#">3</option>
                                                    <option value="#">4</option>
                                                </select>
                                            </th>
                                            <th>
                                                <label for="worksheet">Worksheet</label>
                                                <select name="worksheet" id="worksheet" class="pr-4 pt-2 pb-2 ml-2 rounded">
                                                    <option value="#">All Worksheet</option>
                                                    <option value="#">2</option>
                                                    <option value="#">3</option>
                                                    <option value="#">4</option>
                                                </select></th>
                                            <th>
                                                <label for="date">Date</label>
                                                <select name="date" id="date" class="pr-4 pt-2 pb-2 ml-2 rounded">
                                                    <option value="#">Last 14 days</option>
                                                    <option value="#">2</option>
                                                    <option value="#">3</option>
                                                    <option value="#">4</option>
                                                </select></th>
                                            <th>
                                                <i class="fas fa-clock"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Total Progress</th>
                                                <th scope="col">EP Worksheet Test</th>
                                                <th scope="col">Test Long Worksheet Name for Sample</th>
                                                <th scope="col">EP Ws Test</th>
                                                <th scope="col">Test Junior Ws</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>name</p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="ab">
                                                            <div class="cir">
                                                                <span class="perc">8%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="ab">
                                                            <div class="cir">
                                                                <span class="perc">8%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="ab">
                                                            <div class="cir">
                                                                <span class="perc">8%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="ab">
                                                            <div class="cir">
                                                                <span class="perc">8%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-togglel").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        window.activate = function(el) {
            var current = document.querySelector('.active');
            if (current) {
                current.classList.remove('active');
            }
            el.classList.add('active');
        }
    </script>

</body>

</html>