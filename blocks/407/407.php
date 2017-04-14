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
    $less->compileFile('less/407.less', 'css/407.css');
    ?>
    <link href="css/407.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  
    <script src="js/407.js" type="text/javascript"></script>
</head>

<body>
    <?php
        include './407-content.php';
    ?>
    <script type="text/javascript">
        "use strict";
        var count = new countUp("error", 0, 404, 0, 3);

        window.onload = function () {
            // fire animation
            count.start();
        }
    </script>
</body>

