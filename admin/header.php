<?php $header = $_GET['header'];
if ($header == NULL) {
    $header = "NWC";
}
include 'config.php';
?>



<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">


    <title><?php echo $header ?></title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">


    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />


</head>



<body>

    <!-- <div class="loader"></div> -->


    <div id="app">

        <div class="main-wrapper main-wrapper-1">

            <div class="navbar-bg"></div>


            <nav class="navbar navbar-expand-lg main-navbar sticky">

                <div class="form-inline mr-auto">

                    <ul class="navbar-nav mr-3">

                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                                <i data-feather="align-justify"></i>
                            </a>
                        </li>


                        <li>
                            <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>


                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>

                    </ul>

                </div>

            </nav>


            <div class="main-sidebar sidebar-style-2">

                <aside id="sidebar-wrapper">

                    <!-- ############################## LOGO ############################## -->
                    <div class="sidebar-brand">
                        <a href="index.php">
                            <img alt="image" src="assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Admin</span>
                        </a>
                    </div>


                    <!-- ############################## SIDEBAR ############################## -->
                    <ul class="sidebar-menu">

                        <li class="menu-header">Dashboard</li>


                        <li class="dropdown active">
                            <a href="index.php" class="nav-link">
                                <i data-feather="monitor"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li class="menu-header">Home</li>


                        <li>
                            <a class="nav-link" href="bigBanner.php?header=Big Banner">
                                <i class="far fa-file-alt"></i>
                                <span>Big Banner</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="asSeenOn.php?header=As Seen On">
                                <i class="far fa-file-alt"></i>
                                <span>As Seen On</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="ourStory.php?header=Our Story">
                                <i class="far fa-file-alt"></i>
                                <span>Our Story</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="allInOne.php?header=All In One">
                                <i class="far fa-file-alt"></i>
                                <span>All In One</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="allInOneService.php?header=All In One Service">
                                <i class="far fa-file-alt"></i>
                                <span>All In One Service</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="theExpert.php?header=The Expert">
                                <i class="far fa-file-alt"></i>
                                <span>The Expert</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="featuredProduct.php?header=Featured Product">
                                <i class="far fa-file-alt"></i>
                                <span>Featured Product</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="everyoneDeserve.php?header=Everyone Deserve">
                                <i class="far fa-file-alt"></i>
                                <span>Everyone Deserve</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="ourProcedures.php?header=Our Procedures">
                                <i class="far fa-file-alt"></i>
                                <span>Our Procedures</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="ourTreatments.php?header=Our Treatments">
                                <i class="far fa-file-alt"></i>
                                <span>Our Treatments</span>
                            </a>
                        </li>


                        <li class="menu-header">About</li>


                        <li>
                            <a class="nav-link" href="aboutUs.php?header=About Us">
                                <i class="far fa-file-alt"></i>
                                <span>About Us</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="quality.php?header=Quality">
                                <i class="far fa-file-alt"></i>
                                <span>Quality</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="ourExperience.php?header=Our Experience">
                                <i class="far fa-file-alt"></i>
                                <span>Our Experience</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="bestDoctors.php?header=Best Doctors">
                                <i class="far fa-file-alt"></i>
                                <span>Best Doctors</span>
                            </a>
                        </li>


                        <li class="menu-header">Sign Out</li>


                        <li>
                            <a class="nav-link" href="logout.php">
                                <i class="far fa-file-alt"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>

                </aside>

            </div>



            <!-- ############################## Main Content ############################## -->
            <div class="main-content">