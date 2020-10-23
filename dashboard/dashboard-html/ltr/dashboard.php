<?php

session_start();
if(!isset($_SESSION['userlogin'])){
	header("Location: login.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION);
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/iTracer_logo_small .png">
    <title>iTracer DashBoard</title>
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script
<![endif]-->

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full" >
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/iTracer _logo_rs.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/iTracer _logo_rs.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/iTracer_text.png" alt="homepage" class="dark-logo" />
                             <!-- Light Logo text -->    
                             <img src="assets/images/iTracer_text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/27.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt m-r-5 m-l-5"></i> Project</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="assets/images/users/27.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium">Meanhazul Abedin <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email">meanhaz@gmail.com</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-pencil-alt m-r-5 m-l-5"></i> Project</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="dashboard.php?logout=true"><i class="fa fa-power-off m-r-5 m-l-5"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <li class="p-15 m-t-10"><a href="issue.php" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Add Feature or Issue/Bug</span> </a></li>
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.html" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-basic.html" aria-expanded="false"><i class="mdi mdi-border-all"></i><span class="hide-menu">Project</span></a></li>
                        <li class="text-center p-40 upgrade-btn">
                            </li>
                    </ul>
                    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Project Summary</h4>
                                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                                    </div>
                                    <div class="ml-auto d-flex no-block align-items-center">
                                        <ul class="list-inline font-12 dl m-r-15 m-b-0">
                                            <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Project One</li>
                                            <li class="list-inline-item text-primary"><i class="fa fa-circle"></i> Project Two</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12">
                                        <div class="campaign ct-charts"></div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Notification</h4>
                                <div class="feed-widget">
                                    <ul class="list-style-none feed-body m-0 p-b-20">
                                        <li class="feed-item">
                                            <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> You have 4 pending request. <span class="ml-auto font-12 text-muted">Just Now</span></li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-success"><i class="ti-server"></i></div> Project #1 has an issue.<span class="ml-auto font-12 text-muted">2 Hours ago</span></li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-warning"><i class="ti-shopping-cart"></i></div> New Features added.<span class="ml-auto font-12 text-muted">31 May</span></li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-danger"><i class="ti-user"></i></div> Tester Report.<span class="ml-auto font-12 text-muted">30 May</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                
                                    <div class="table-responsive"> 
                                    <div><h3 class="card-title">Issues in Repository</h3></div>
                                      <table class="table v-middle">
                                      <thead>
                                      <tr>
                                        <th scope="col">Issue #</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Created</th>
                                        <th scope="col">State</th>
                                      </tr>
                                      </thead>
                                      <tbody id="output-element">
                                      </tbody>
                                      </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Projects running</h4>
                                        <h5 class="card-subtitle">Overview of Projects running</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="dl">
                                            <select class="custom-select">
                                                <option value="0" selected>Monthly</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Project</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Developer</th>
                                            <th class="border-top-0">Langugae</th>
                                            <th class="border-top-0">Features</th>
                                            <th class="border-top-0">Issues</th>
                                            <th class="border-top-0">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a class="btn btn-circle btn-info text-white">EA</a></div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Akash App UI</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>In Progress</td>
                                            <td>Tausif Jaman</td>
                                            <td>
                                                <label class="label label-danger">Angular</label>
                                            </td>
                                            <td>46</td>
                                            <td>2</td>
                                            <td>
                                                <h5 class="m-b-0">3 Months</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a class="btn btn-circle btn-orange text-white">MA</a></div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Monster Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Done</td>
                                            <td>Shuvo Abrar</td>
                                            <td>
                                                <label class="label label-info">Vue Js</label>
                                            </td>
                                            <td>146</td>
                                            <td>16</td>
                                            <td>
                                                <h5 class="m-b-0">6 Months and 20 days</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a class="btn btn-circle btn-success text-white">MP</a></div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>In Progress</td>
                                            <td>Ikramul Islam</td>
                                            <td>
                                                <label class="label label-success">Bootstrap</label>
                                            </td>
                                            <td>69</td>
                                            <td>3</td>
                                            <td>
                                                <h5 class="m-b-0">10 Months </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a class="btn btn-circle btn-purple text-white">AA</a></div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">resturant Management System</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Approved</td>
                                            <td>Raihan Chowdhhury</td>
                                            <td>
                                                <label class="label label-purple">React</label>
                                            </td>
                                            <td>385</td>
                                            <td>42</td>
                                            <td>
                                                <h5 class="m-b-0">1 Year</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

               <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Projects running</h4>
                                        <h5 class="card-subtitle">Status of Projects </h5>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="dl">
                                            <select class="custom-select">
                                                <option value="0" selected>To Do</option>
                                                <option value="1">In Progress</option>
                                                <option value="2">Done</option>
                                                <option value="3">Aprroved</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table  class="table table-bordered table-responsive-md "  id="demo" >
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">To Do</th>
                                            <th class="border-top-0">In Progress</th>
                                            <th class="border-top-0">Done</th>
                                            <th class="border-top-0">Approved</th>
                                            
                                        </tr>
                                    </thead>
                                    <?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "itracer";

                                                // Create connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                // Check connection
                                                if ($conn->connect_error) {
                                                  die("Connection failed: " . $conn->connect_error);
                                                }
                                                $id1=1;
                                                

                                                $sql = "SELECT * FROM `todolist` where id='".$id1."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        echo "<tbody>
                                        <tr>";
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"todo\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn btn-info text-white\" onclick=\"Todo(this,". $row["id"].")\"> Move to \"In Progress\"</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                       
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                
                                                $id2=6;
                                                $sql = "SELECT * FROM `inprogress` where id='".$id2."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"progress\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn-orange text-white\" onclick=\"inprogress(this,". $row["id"].")\"> Move to \"To Do\"</button>
                                                            <button class=\"btn btn-purple text-white\" onclick=\"done(this,". $row["id"].")\"> Mark as \"Done\"</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                $id3=11;
                                                    $sql = "SELECT * FROM `done` where id='".$id3."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"done\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn-success text-white\" onclick=\"approve(this,". $row["id"].")\"> Approve</button>
                                                            <button class=\"btn btn-danger text-white\" onclick=\"reject(this,". $row["id"].")\"> Reject</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                            $id4=16;
                                            $sql = "SELECT * FROM `approved` where id='".$id4."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"approve\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>                                                       
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        echo "</tr>";
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                $id1=2;
                                                

                                                $sql = "SELECT * FROM `todolist` where id='".$id1."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        echo "<tbody>
                                        <tr>";
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"todo\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn btn-info text-white\" onclick=\"Todo(this,". $row["id"].")\"> Move to \"In Progress\"</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                       
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                
                                                $id2=7;
                                                $sql = "SELECT * FROM `inprogress` where id='".$id2."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"progress\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn-orange text-white\" onclick=\"inprogress(this,". $row["id"].")\"> Move to \"To Do\"</button>
                                                            <button class=\"btn btn-purple text-white\" onclick=\"done(this,". $row["id"].")\"> Mark as \"Done\"</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                $id3=12;
                                                    $sql = "SELECT * FROM `done` where id='".$id3."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"done\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn-success text-white\" onclick=\"approve(this,". $row["id"].")\"> Approve</button>
                                                            <button class=\"btn btn-danger text-white\" onclick=\"reject(this,". $row["id"].")\"> Reject</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }
                                                $id4=17;
                                                $sql = "SELECT * FROM `approved` where id='".$id4."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"approve\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>                                                       
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        echo "</tr>";
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                $id1=3;
                                                

                                                $sql = "SELECT * FROM `todolist` where id='".$id1."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        echo "<tbody>
                                        <tr>";
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"todo\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn btn-info text-white\" onclick=\"Todo(this,". $row["id"].")\"> Move to \"In Progress\"</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                       
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                
                                                $id2=8;
                                                $sql = "SELECT * FROM `inprogress` where id='".$id2."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"progress\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn-orange text-white\" onclick=\"inprogress(this,". $row["id"].")\"> Move to \"To Do\"</button>
                                                            <button class=\"btn btn-purple text-white\" onclick=\"done(this,". $row["id"].")\"> Mark as \"Done\"</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                $id3=13;
                                                    $sql = "SELECT * FROM `done` where id='".$id3."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"done\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn-success text-white\" onclick=\"approve(this,". $row["id"].")\"> Approve</button>
                                                            <button class=\"btn btn-danger text-white\" onclick=\"reject(this,". $row["id"].")\"> Reject</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }
                                                    $id4=18;
                                                    $sql = "SELECT * FROM `approved` where id='".$id4."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"approve\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>                                                       
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        echo "</tr>";
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }


                                                $id1=4;
                                                

                                                $sql = "SELECT * FROM `todolist` where id='".$id1."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        echo "<tbody>
                                        <tr>";
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"todo\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn btn-info text-white\" onclick=\"Todo(this,". $row["id"].")\"> Move to \"In Progress\"</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                       
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                
                                                $id2=9;
                                                $sql = "SELECT * FROM `inprogress` where id='".$id2."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"progress\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn-orange text-white\" onclick=\"inprogress(this,". $row["id"].")\"> Move to \"To Do\"</button>
                                                            <button class=\"btn btn-purple text-white\" onclick=\"done(this,". $row["id"].")\"> Mark as \"Done\"</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                $id3=14;
                                                    $sql = "SELECT * FROM `done` where id='".$id3."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"done\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn-success text-white\" onclick=\"approve(this,". $row["id"].")\"> Approve</button>
                                                            <button class=\"btn btn-danger text-white\" onclick=\"reject(this,". $row["id"].")\"> Reject</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }
                                                    $id4=19;
                                                    $sql = "SELECT * FROM `approved` where id='".$id4."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"approve\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>                                                       
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        echo "</tr>";
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                $id1=5;
                                                

                                                $sql = "SELECT * FROM `todolist` where id='".$id1."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        echo "<tbody>
                                        <tr>";
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"todo\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn btn-info text-white\" onclick=\"Todo(this,". $row["id"].")\"> Move to \"In Progress\"</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                       
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                
                                                $id2=10;
                                                $sql = "SELECT * FROM `inprogress` where id='".$id2."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"progress\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn-orange text-white\" onclick=\"inprogress(this,". $row["id"].")\"> Move to \"To Do\"</button>
                                                            <button class=\"btn btn-purple text-white\" onclick=\"done(this,". $row["id"].")\"> Mark as \"Done\"</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                $id3=15;
                                                    $sql = "SELECT * FROM `done` where id='".$id3."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"done\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>
                                                        <div class=\"m-r-10\">
                                                            <button class=\"btn btn-success text-white\" onclick=\"approve(this,". $row["id"].")\"> Approve</button>
                                                            <button class=\"btn btn-danger text-white\" onclick=\"reject(this,". $row["id"].")\"> Reject</button>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }
                                                    $id4=20;
                                                    $sql = "SELECT * FROM `approved` where id='".$id4."'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<p>"; $result; echo "</p>";
                                                if ($result->num_rows > 0) {
                                                        
                                                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                            echo "<td id=\"approve\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <h4 class=\"m-b-0 font-16\">" . $row["projectID"]. "</h4>
                                                        <h5 class=\"m-b-0 font-14\">" . $row["issueID"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">". $row["developer"]."</h4>
                                                        <h5 class=\"m-b-0 font-14\">"
                                                        . $row["tester"]."</h5>                                                       
                                                    </div>
                                                </div>
                                            </td>";
                                                        }
                                                        echo "</tr></tbody>";
                                                    } else {
                                                        echo "0 results";
                                                    
                                                    }

                                                mysqli_close($conn);
                                            ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Comments</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="assets/images/users/tausif.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Tausif Jaman</h6>
                                        <span class="m-b-15 d-block">User Interface complete </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">September 14, 2020</span> <span class="label label-rounded label-primary">Done</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="assets/images/users/ray.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text active w-100">
                                        <h6 class="font-medium">Raihan Chowdhhury</h6>
                                        <span class="m-b-15 d-block">I ahve added an Issue. Please Check </span>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-right">September 09 , 2020</span>
                                            <span class="label label-success label-rounded">Bugs</span>
                                            <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>    
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="assets/images/users/rofy.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Ikramul Islam</h6>
                                        <span class="m-b-15 d-block">Updated the project Status </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">September 12 , 2020</span>
                                            <span class="label label-rounded label-danger">Approved</span>
                                            <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
            
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by iTracer. Designed and Developed by MZ.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
     <!-- Jquery JS-->
     <script src="vendor/jquery/jquery.min.js"></script>
     <!-- Main JS-->

     <script type="module">
import { Octokit } from "https://cdn.pika.dev/@octokit/request";
myAsyncMethod();

      async function myAsyncMethod() {
        const result = await octokit.request('GET /repos/{owner}/{repo}/issues', {
              owner: 'octocat',
              repo: 'hello-world'
            })
        console.log("wafesgrdfgn ", result.data);
      }
</script>
    
     <script>

         // function printRepoCount() {
        //   var responseObj = JSON.parse(this.responseText);
        //   console.log(responseObj.name + " has " + responseObj.public_repos + " public repositories!");
        // }
        // var request = new XMLHttpRequest();
        // request.onload = printRepoCount;
        // request.open('get', 'https://api.github.com/users/funchal', true)
        //  // request.open('get','https://api.github.com/repos/vmg/redcarpet/issues?state=closed', true)
        //  // request.open('get', "https://api.github.com/users/blackmiaool/repos", true)
        // request.send()



        // ============= code to fetch list of issues from a public repository===//
        const repoPath = "microsoft/typescript"  //public repository

        $(document).ready(function() {
        $.ajax({
            url: `https://api.github.com/repos/${repoPath}/issues`,
            type: "GET",
            crossDomain: true,
            success: function (response) {
                tbody = "";
                response.forEach(issue => {
                    tbody += `<tr><td>${issue.number}</td><td>${issue.title}</td><td>${issue.created_at}</td><td>${issue.state}</td></tr>`;
                });
                $('#output-element').html(tbody);
                console.log("Response:", response);
            },
            error: function (xhr, status) {
                alert("error: " + JSON.stringify(xhr));
            }
        });
        });

        //==============================================================================//
        function todo(elements) {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              //alert(elements.id);
              myFunction(this);
            }
          };
          xhttp.open("GET", "table001.xml", true);
          xhttp.send();
        }
        function Todo(elements, id) {
          console.log("fromTodo--------", id);
          var data = new FormData();
         data.append('id', id);
         // data.append('message', mes);
            // console.log("ajax call", mes, uid); 
          // AJAX CALL
          var xhr = new XMLHttpRequest();
          xhr.open('POST', "todochange.php", true);
          

      //}
        xhr.send(data);
        fetchFromDB();
        // connectwithgit();

    }

    function TodoforMakeTable(elements, id) {
          console.log("fromTodo--------", id);
          var data = new FormData();
          if (id<4) {
            id=1;
          }
          else if (id<8) {
            id=2;
          }
          else if (id<12) {
            id=3;
          }
          else if (id<16) {
            id=4;
          }
          else if (id<20) {
            id=5;
          }

          console.log("iiiddd ", id) ;
         data.append('id', id);
         // data.append('message', mes);
            // console.log("ajax call", mes, uid); 
          // AJAX CALL
          var xhr = new XMLHttpRequest();
          xhr.open('POST', "todochange.php", true);
          

      //}
        xhr.send(data);
        fetchFromDB();

    }
    function inprogress(elements, id) {


        // moves to todo from in progress
          console.log("fromTodo--------", id);
          var data = new FormData();
         data.append('id', id);
         // data.append('message', mes);
            // console.log("ajax call", mes, uid); 
          // AJAX CALL
          var xhr = new XMLHttpRequest();
          xhr.open('POST', "inprogresschange.php", true);
          

      //}
        xhr.send(data);
        fetchFromDB();

    }

    function inprogressforMakeTable(elements, id) {
        var data = new FormData();
          if (id<4) {
            id=6;
          }
          else if (id<8) {
            id=7;
          }
          else if (id<12) {
            id=8;
          }
          else if (id<16) {
            id=9;
          }
          else if (id<20) {
            id=10;
          }

          console.log("iiiddd ", id) ;

        // moves to todo from in progress
          console.log("fromTodo--------", id);
          var data = new FormData();
         data.append('id', id);
         // data.append('message', mes);
            // console.log("ajax call", mes, uid); 
          // AJAX CALL
          var xhr = new XMLHttpRequest();
          xhr.open('POST', "inprogresschange.php", true);
          

      //}
        xhr.send(data);
        fetchFromDB();

    }

    function done(elements, id) {


        // moves to todo from in progress
          console.log("fromTodo--------", id);
          var data = new FormData();
         data.append('id', id);
         // data.append('message', mes);
            // console.log("ajax call", mes, uid); 
          // AJAX CALL
          var xhr = new XMLHttpRequest();
          xhr.open('POST', "donechange.php", true);
          

      //}
        xhr.send(data);
        fetchFromDB();

    }

    function doneforMakeTable(elements, id) {
        var data = new FormData();
          if (id<4) {
            id=6;
          }
          else if (id<8) {
            id=7;
          }
          else if (id<12) {
            id=8;
          }
          else if (id<16) {
            id=9;
          }
          else if (id<20) {
            id=10;
          }

        // moves to todo from in progress
          console.log("fromTodo--------", id);
          var data = new FormData();
         data.append('id', id);
         // data.append('message', mes);
            // console.log("ajax call", mes, uid); 
          // AJAX CALL
          var xhr = new XMLHttpRequest();
          xhr.open('POST', "donechange.php", true);
          

      //}
        xhr.send(data);
        fetchFromDB();

    }

    function approve(elements, id) {

        
        // moves to todo from in progress
          console.log("fromTodo--------", id);
          var data = new FormData();
         data.append('id', id);
         // data.append('message', mes);
            // console.log("ajax call", mes, uid); 
          // AJAX CALL
          var xhr = new XMLHttpRequest();
          xhr.open('POST', "approvechange.php", true);
          

      //}
        xhr.send(data);
        fetchFromDB();

    }

    function approveforMakeTable(elements, id) {


        // moves to todo from in progress
          var data = new FormData();
          if (id<4) {
            id=11;
          }
          else if (id<8) {
            id=12;
          }
          else if (id<12) {
            id=13;
          }
          else if (id<16) {
            id=14;
          }
          else if (id<20) {
            id=15;
          }
          console.log("fromTodo--------", id);
          var data = new FormData();
         data.append('id', id);
         // data.append('message', mes);
            // console.log("ajax call", mes, uid); 
          // AJAX CALL
          var xhr = new XMLHttpRequest();
          xhr.open('POST', "approvechange.php", true);
          

      //}
        xhr.send(data);
        fetchFromDB();

    }

    function reject(elements, id) {


        // moves to todo from in progress
          console.log("fromTodo--------", id);
          var data = new FormData();
         data.append('id', id);
         // data.append('message', mes);
            // console.log("ajax call", mes, uid); 
          // AJAX CALL
          var xhr = new XMLHttpRequest();
          xhr.open('POST', "rejectchange.php", true);
          

      //}
        xhr.send(data);
        fetchFromDB(fetchFromDB);

    }

    function rejectforMakeTable(elements, id) {


        // moves to todo from in progress

          var data = new FormData();
          if (id<4) {
            id=11;
          }
          else if (id<8) {
            id=12;
          }
          else if (id<12) {
            id=13;
          }
          else if (id<16) {
            id=14;
          }
          else if (id<20) {
            id=15;
          }
          console.log("fromTodo--------", id);
          var data = new FormData();
         data.append('id', id);
         // data.append('message', mes);
            // console.log("ajax call", mes, uid); 
          // AJAX CALL
          var xhr = new XMLHttpRequest();
          xhr.open('POST', "rejectchange.php", true);
          

      //}
        xhr.send(data);
        fetchFromDB(fetchFromDB);

    }
        function fetchFromDB(){
        var id=1;
        var yourVariable;
        var largeArr;

        
            jQuery.ajax({
                type: "POST",
                async: false,
                url: 'adress_fun.php',
                dataType: 'json',
                data: {functionname: 'add', arguments: [id]},

                success: function (obj, textstatus) {
                              if( !('error' in obj) ) {
                                  yourVariable = obj.result;
                                  console.log(yourVariable);
                              }
                              else {
                                  console.log(obj.error);
                              }
                        }
            });
            // var projectid= yourVariable['projectid'];
            // var issueid= yourVariable['issueid'];
            // var developer= yourVariable['developer'];
            // var tester= yourVariable['tester'];

            // console.log(projectid, issueid, developer, tester);
            // var arr = new Array(projectid, issueid, developer,tester);
            
        
// 
        makeTable(yourVariable);
        }

      

        function makeTable(x){
          var table="<tr><th>To Do</th><th>In Progress</th><th>Done</th><th>Approved</th></tr>";  
          console.log(x.length);
          table += "<tr>";
          for (i = 0; i <x.length/4; i=i+4 ) { 
            

            

            table += "<td>" + x[i] + "<br>"+x[i+1] + "<br>"+  x[i+2] + "<br>"+ x[i+3]+"<br>"+
            "<button class='btn btn-info text-white'onclick='TodoforMakeTable(this,"+i+")'>Move to 'In Progress'</button>" +
            "</td>";
            
            table += "<td>" + x[i+20] + "<br>"+x[i+21] + "<br>"+  x[i+22] + "<br>"+ x[i+23]+"<br>"+
            "<button class='btn btn-orange text-white'onclick='inprogressforMakeTable(this,"+i+")'>Move to 'To Do'</button>" +
                        "\n\n"+
                        "<button class='btn btn-purple text-white'onclick='doneforMakeTable(this,"+i+")'>Mark as 'Done'</button>" +
                        "</td>";

            table += "<td>" + x[i+40] + "<br>"+x[i+41] + "<br>"+  x[i+42] + "<br>"+ x[i+43]+"<br>"+
            "<button class='btn btn-success text-white'onclick='approveforMakeTable(this,"+i+")'>Approve</button>" +
                        "\n\n"+
                        "<button class='btn btn-danger text-white'onclick='rejectforMakeTable(this,"+i+")'>Reject</button>"+
            "</td>";

            table += "<td>" + x[i+60] + "<br>"+x[i+61] + "<br>"+  x[i+62] + "<br>"+ x[i+63]+"<br>"+
            
            "</td>";
            console.log("pppp ",i);
            table += "</tr>";
            }

        document.getElementById("demo").innerHTML = table;

        }

        function myFunction(xml) {
          var i;
          var parser = new DOMParser();
          var xmlDoc = parser.parseFromString(xml.responseText,"text/xml");
          //console.log(xml.responseText);
          console.log(xmlDoc);
          var table="<tr><th>To Do</th><th>In Progress</th><th>Done</th><th>Approved</th></tr>";
          var x = xmlDoc.getElementsByTagName("CD");
          //console.table(x);
          for (i = 0; i <x.length; i++) { 
              
            if (x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue != null ||
                x[i].getElementsByTagName("TITLE1")[0].childNodes[0].nodeValue != null ||
                x[i].getElementsByTagName("TITLE2")[0].childNodes[0].nodeValue != null ||
                x[i].getElementsByTagName("TITLE3")[0].childNodes[0].nodeValue != null) {
                    table += "<tr>";
                    if (x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue != null) {
                        table += "<td>" + x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("COMPANY")[0].childNodes[0].nodeValue +
                        "<br>"+
                        "<button class='btn btn-info text-white'onclick='todo()'>Move to 'In Progress'</button>" +
                        "</td>";
                    }
                    
                    if (x[i].getElementsByTagName("TITLE1")[0].childNodes[0].nodeValue != null) {
                        table += "<td>" + x[i].getElementsByTagName("TITLE1")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("ARTIST1")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("COUNTRY1")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("COMPANY1")[0].childNodes[0].nodeValue +
                        "<br>"+
                        "<button class='btn btn-orange text-white'onclick='inProgress()'>Move to 'To Do'</button>" +
                        "\n\n"+
                        "<button class='btn btn-purple text-white'onclick='done()'>Mark as 'Done'</button>" +
                        "</td>";
                    }
                    
                    
                    if (x[i].getElementsByTagName("TITLE2")[0].childNodes[0].nodeValue != null) {
                        table += "<td>" + x[i].getElementsByTagName("TITLE2")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("ARTIST2")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("COUNTRY2")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("COMPANY2")[0].childNodes[0].nodeValue +
                        "<br>"+
                        "<button class='btn btn-success text-white'onclick='inProgress()'>Approve</button>" +
                        "\n\n"+
                        "<button class='btn btn-danger text-white'onclick='todo()'>Reject</button>" +
                        "</td>";
                    }
                    
                    
                    if (x[i].getElementsByTagName("TITLE3")[0].childNodes[0].nodeValue != null) {
                        table += "<td>" + x[i].getElementsByTagName("TITLE3")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("ARTIST3")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("COUNTRY3")[0].childNodes[0].nodeValue +
                        "<br>"+
                        x[i].getElementsByTagName("COMPANY3")[0].childNodes[0].nodeValue + "</td>";
                    }
                    table += "</tr>";
            }
          }
          document.getElementById("demo").innerHTML = table;
        }
       
    // async function connectwasfithgit(){
    //     const octokit = new Octokit({ auth: `2ccb4872e9ac83b8d6f47cf9b19145477521b43eh` });

    //     const response = await octokit.request('GET /issues', {
    //       org: "octokit",
    //       type: "private",
    //     });
    // }

    // async function connectwithgit(){

    //     const octokit = new Octokit();

    //     // Compare: https://docs.github.com/en/rest/reference/repos/#list-organization-repositories
    //     octokit.repos
    //       .listForOrg({
    //         org: "octokit",
    //         type: "public",
    //       })
    //       .then(({ data }) => {
    //         // handle data
    //       });
    // }
        </script>
</body>

</html>