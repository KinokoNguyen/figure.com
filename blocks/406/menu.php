<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/menu.less', 'css/menu.css');
    ?>
    <link href="css/menu.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.bootstrap-autohidingnavbar.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-menu">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">

            <div class="container-fluid">

                <!---NAVBAR-->
                <div class="navbar-header">
                    <!--BUTTON-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--/END BUTTON-->

                </div>
                <!--/END NAVBAR-->

                <!--NAVBAR COLLAPSE-->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        <!--HOME-->
                        <li>
                            <a href="#">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Home
                            </a>
                        </li>
                        <!--/END HOME-->

                        <!--POST-->
                        <li><a href="#about">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                List of posts</a>
                        </li>
                        <!--/END POST-->


                        <!--SEARCH-->
                        <li>
                            <a href="#contact">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                Search
                            </a>
                        </li>


                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <!--PLUS-->
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Plus">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </a>
                        </li>
                        <!--END PLUS-->
                        <!--NOTIFICATION-->
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Notification">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                            </a>
                        </li>
                        <!--/END NOTIFICATION-->

                        <!--MESSAGE-->
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Message">
                                <i class="fa fa-commenting" aria-hidden="true"></i>
                            </a>
                        </li>
                        <!--/END MESSAGE-->

                        <!--USER PROFILE-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user-img" data-toggle="dropdown tooltip" data-placement="bottom" title="Information">
                                <img src="images/avatar.jpg" alt=""/>
                            </a>
                            <ul class="dropdown-menu">
                                <div class="profile-user">
                                    <div class="profile">
                                        <a href="#">
                                            <img src="images/avatar.jpg" alt=""/>
                                            <div class="user">
                                                <span class="user-name">vlooki</span><br>
                                                <span>Physical Medicine and...</span>

                                            </div>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="links">
                                        <a href="#">Preferences</a><br><br>
                                        <a href="#">Help</a><br><br>
                                        <a href="#">Log Out</a>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <!--/END USER PROFILE-->

                    </ul>
                </div>
                <!--NAVBAR COLLAPSE-->

                <!--Logo-->
                <button class="header-logo" data-ember-action="" data-ember-action-378="378">
                    <img src="images/logo.svg" class="logo">
                </button>
            </div>
        </div>

        <div class="container">

            <p class="demo-long">
                Long content...
            </p>
            <p class="demo-long">
                Long content...
            </p>
            <p class="demo-long">
                Long content...
            </p>
            <p class="demo-long">
                Long content...
            </p>
            <p class="demo-long">
                Long content...
            </p>
            <p class="demo-long">
                Long content...
            </p>

        </div>
    </div>


    <script>
        $("div.navbar-fixed-top").autoHidingNavbar();
    </script>

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</body>
