<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Meetup Test';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>    

    <?= $this->fetch('meta') ?>
    <?= $this->Html->css([
        '../vendors/plugins/bower_components/chartist/dist/chartist.min',
        '../vendors/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css',
        'style.min'
    ]) ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style type="text/css">
        .pagination li {
            border: 1px solid #ddd;
            padding: 5px;
        }
            
    </style>

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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="dashboard.html">
                    <!-- Logo text -->
                    <span class="logo-text">
                        <!-- dark Logo text -->
                        Meetup Test
                    </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav ms-auto d-flex align-items-center">                   
                    <li>
                        <a class="profile-pic" href="#">
                            <span class="text-white font-medium">Admin</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar --->
        <!-- ============================================================== -->
        <?= $this->Element('sidebar');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar --->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            
            <?= $this->fetch('content');?>

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Meetup Test By <a
                href="https://github.com/mayank597/meetup_test">Mayank Sharma</a>
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
    <?= $this->Html->script([
        '../vendors/plugins/bower_components/jquery/dist/jquery.min',
    ])?>
    <!-- Bootstrap tether Core JavaScript -->
    <?= $this->Html->script([
        '../vendors/bootstrap/dist/js/bootstrap.bundle.min',
        'app-style-switcher',
        '../vendors/plugins/bower_components/jquery-sparkline/jquery.sparkline.min',
    ])?>

    <!--Wave Effects -->
    <?= $this->Html->script([
        'waves',
    ])?>
    <!--Menu sidebar -->
    <?= $this->Html->script([
        'sidebarmenu',
    ])?>

    <?= $this->fetch('scriptBottom');?>

    <!--This page JavaScript -->

</body>
</html>
