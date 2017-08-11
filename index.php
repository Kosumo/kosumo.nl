<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kosumo Landing Page</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;KOSUMO</a>
                </div>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">

            <div class="sidebar-collapse">

                <ul class="nav" id="main-menu">
                	<li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Dashboard<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li>
                                <a href="index.php">Server Status</a>
                            </li>
                            <li>
                                <a href="teamspeak.html">Teamspeak</a>
                            </li>
                            <li>
                                <a href="prtg.html">PRTG</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="services.html"><i class="fa fa-cog"></i>Services</a>
                    </li>
                    <li>
                        <a href="devices.html"><i class="fa fa-desktop"></i>Devices</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Server Status</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                <div class="row">               
                    <div class="col-md-3 col-sm-3 col-xs-6">
                            <?php
                            if(fsockopen("192.168.2.200",10011)) : ?>
                            <div class="panel panel-primary text-center no-boder bg-color-green">
                            <?php else : ?>
                            <div class="panel panel-primary text-center no-boder bg-color-red">
                            <?php endif; ?>
                                <div class="panel-body">
                                    <img src="assets/img/teamspeak.png" style="width:100px;height:100px;">
                                    <h3>Teamspeak</h3>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                            <?php
                            if(fsockopen("192.168.2.201",7878)) : ?>
                            <div class="panel panel-primary text-center no-boder bg-color-green">
                            <?php else : ?>
                            <div class="panel panel-primary text-center no-boder bg-color-red">
                            <?php endif; ?>
                                <div class="panel-body">
                                    <img src="assets/img/terraria.png" style="width:100px;height:100px;">
                                    <h3>Terraria</h3>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                            <?php
                            if(fsockopen("86.95.55.80",27020)) : ?>
                            <div class="panel panel-primary text-center no-boder bg-color-green">
                            <?php else : ?>
                            <div class="panel panel-primary text-center no-boder bg-color-red">
                            <?php endif; ?>
                                <div class="panel-body">
                                    <img src="assets/img/csgo.png" style="width:100px;height:100px;">
                                    <h3>CSGO</h3>
                                </div>
                            </div>
                    </div>      
                </div>
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="https://static.tsviewer.com/short_expire/js/ts3viewer_loader.js"></script>
   
</body>
</html>
