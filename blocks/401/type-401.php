<head>
    <meta charset="UTF-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/401.less', 'css/401.css');
    ?>
    <link href="css/401.css" rel="stylesheet" type="text/css"/>  
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
</head>
<body>
    <div class="type-401">
        <div class="container top-menu">
            <!--LOGO-->
            <div class="logo">
                <a href="#">
                   <img src="images/logo.png" alt="" style="width: 100px; height: 50px;"/>
                </a>
            </div>
            <!--END LOGO-->
            
            <!--MAIN MENU-->
            <div class="">
                <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
                <div class="clear"></div>
            </div>
            
            <div class="navbar-collapse">
                <ul class="menu nav navbar-nav navbar-right collapse collapse-top-menu">
                    <li class="item active"><a href="#">Medical case</a></li>
                    <li class="item"><a href="#">View</a></li>
                    <li class="item"><a href="#">Mobile</a></li>
                    <li class="item"><a href="#">Asus</a></li>
                    <li class="item"><a href="#">Quiz</a></li>
                </ul>
            </div>
            <!--END MAIN MENU-->              
        </div>  
    </div>   
</body>