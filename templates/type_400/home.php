<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>    
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
   <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  
   <script src="js/bootstrap.min.js" type="text/javascript"></script>
   
</head>

<body>
    <div class="container">
        <header>
        <?php 
        include './mod-1.php';
        include './mod-2.php';
        ?>
            </header>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <?php 
                    include './mod-5.php';
                ?>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <?php 
                    include './mod-4.php';
                ?>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php 
        include './mod-6.php';
       ?>
    </div>
</body>