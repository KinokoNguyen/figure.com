<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  

    <?php
    if (!class_exists('lessc')) {
        include ('libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-411.less', 'css/type-411.css');
    ?>
    <link href="css/type-411.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  

</head>

<body>
    <div class="type-411">
        <div class="container register">
            <div class="row">
                demo
                
            </div>
        </div>
    </div>
    
</body>
