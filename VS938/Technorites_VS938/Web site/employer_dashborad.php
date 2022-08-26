<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employer Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <!-- Sidebar Header    -->
        <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3"
                    src="img/All_India_Council_for_Technical_Education_logo-removebg-preview.png" alt="person">
                <h2 class="h5 text-white text-uppercase mb-0">Pankaj Porwal</h2>
                <p class="text-sm mb-0 text-muted">Faculty</p>
            </div>
            <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center"
                href="index.html">
                <p class="h1 m-0">PV</p>
            </a>
        </div>
        <!-- Sidebar Navigation Menus--><span
            class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
        <ul class="list-unstyled">
            <li class="sidebar-item"><a class="sidebar-link" href="Faculty_dashboard.html">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                        <use xlink:href="#real-estate-1"> </use>
                    </svg>Home </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="Profile">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                        <use xlink:href="#user-1"> </use>
                    </svg>Profile </a></li>

    </nav>
    <div class="page">
        <!-- navbar-->
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="d-flex align-items-center"><a
                                class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900"
                                id="toggle-btn" href="#">
                                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                                    <use xlink:href="#menu-1"> </use>
                                </svg></a><a class="navbar-brand ms-2" href="employer_dashboard.php">
                                <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span
                                        class="text-white fw-normal text-xs">Pratikriya </span><strong
                                        class="text-primary text-sm">Vishleshan</strong></div>
                            </a></div>
                        <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">

                            <!-- Log out-->
                            <li class="nav-item"><a class="nav-link text-white text-sm ps-0" href="login.php"> <span
                                        class="d-none d-sm-inline-block">Logout</span>
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#security-1"> </use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div id="Facultyflex" class="card-body ">
            <form id="form" action="" method="GET">
                <div class="form_questions">
                    <div class="form-control">
                        <label class="question">
                            1. Academic knowledge of the students
                        </label>
                        <div class="radio_">
                            <div class="expression" id="feedbackQuestion1">Average</div>
                            <label for="question_1"><input class="slider" type="range" id="question_1" name="question_1"
                                    min="1" max="5" onchange="feedbackValue(1,this.value)" /></label>
                        </div>
                    </div>
                    <div class="form-control">
                        <label class="question">
                            2. Syllabus is suitable for Employability and is need based and as
                            per current trends in market
                        </label>
                        <div class="radio_">
                            <div class="expression" id="feedbackQuestion2">Average</div>
                            <label for="question_2"><input class="slider" type="range" id="question_2" name="question_2"
                                    min="1" max="5" onchange="feedbackValue(2,this.value)" /></label>
                        </div>
                    </div>
                    <div class="form-control">
                        <label class="question">
                            3. Ability of the employee to apply the concepts of engineering to
                            workplace
                        </label>
                        <div class="radio_">
                            <div class="expression" id="feedbackQuestion3">Average</div>
                            <label for="question_3"><input class="slider" type="range" id="question_3" name="question_3"
                                    min="1" max="5" onchange="feedbackValue(3,this.value)" /></label>
                        </div>
                    </div>
                    <div class="form-control">
                        <label class="question">
                            4. Ability of the employee to identify, formulate, interpret,
                            analyse, and solve problems
                        </label>
                        <div class="radio_">
                            <div class="expression" id="feedbackQuestion4">Average</div>
                            <label for="question_4"><input class="slider" type="range" id="question_4" name="question_4"
                                    min="1" max="5" onchange="feedbackValue(4,this.value)" /></label>
                        </div>
                    </div>
                    <div class="form-control">
                        <label class="question">
                            5. Ability of the employee to communicate
                        </label>
                        <div class="radio_">
                            <div class="expression" id="feedbackQuestion5">Average</div>
                            <label for="question_5"><input class="slider" type="range" id="question_5" name="question_5"
                                    min="1" max="5" onchange="feedbackValue(5,this.value)" /></label>
                        </div>
                    </div>
                    <div class="form-control last_question">
                        <label class="question"> 6. Ability to work in a team </label>
                        <div class="radio_">
                            <div class="expression" id="feedbackQuestion6">Average</div>
                            <label for="question_6"><input class="slider" type="range" id="question_6" name="question_6"
                                    min="1" max="5" onchange="feedbackValue(6,this.value)" /></label>
                        </div>
                    </div>
                </div>
                <button class="submit_button" type="submit" value="submit" name="submit">Submit</button>
            </form>
        </div>
        <!-- Header Section-->
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function (e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');


    </script>
<script>
      var colorChoice = ["#e0301e", "#eb8c00", "#F8D210", "#5cf088", "#16e955"];
      var shodowChoice = [
        " 0px 0px 5px rgb(231, 91, 75,0.81)",
        "0px 0px 5px rgb(255, 173, 51,0.81)",
        "0px 0px 5px rgb(250, 222, 82,0.81)",
        " 0px 0px 5px rgb(162, 246, 187,0.81)",
        "0px 0px 5px rgb(92, 240, 136,0.81)",
      ];
      var textChoice = ["Poor", "Below Average", "Average", "Good", "Exellent"];
      function feedbackValue(typeId, questionId) {
        document.getElementById(`feedbackQuestion${typeId}`).innerHTML =
          textChoice[questionId - 1];
        document.getElementById(`feedbackQuestion${typeId}`).style.color =
          colorChoice[questionId - 1];
        document.getElementById(`feedbackQuestion${typeId}`).style.textShadow =
          shodowChoice[questionId - 1];
      }
    </script>

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>
<?php
    $q = explode('/',$_SERVER['QUERY_STRING']);
    $feed_id =  (int)$q[0];
    $emp_id =  $q[1]; 
  $insert = false;
  if(isset($_GET['submit']))
  {
      $con = mysqli_connect("127.0.0.1","root","","pv2");

      if(!$con){
          die("not connect to database" . mysqli_connect_error());
      }
      $feed_id =  $_GET['feedback_id'];
      $emp_id =  $_GET['emp_id'];
      $filling_date=date("Y-m-d");
      $Q1 =  $_GET['question_1'];
      $Q2 =  $_GET['question_2'];
      $Q3 =  $_GET['question_3'];
      $Q4 =  $_GET['question_4'];
      $Q5 =  $_GET['question_5'];
      $Q6 =  $_GET['question_6'];
      $sql= "INSERT INTO emp_feedback values('$feed_id','$filling_date','$emp_id',$Q1,$Q2,$Q3,$Q4,$Q5,$Q6)";
      $con->query($sql);
      $con->close();                      
  }
  ?>