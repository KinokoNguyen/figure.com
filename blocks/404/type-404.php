<!DOCTYPE html>
<html>
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
        $less->compileFile('less/404.less', 'css/404.css');
        ?>
        <link href="css/404.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div class="type-404">
            <div class="container show-img">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <img src="images/phones-en.png">
                </div>
            </div>
        </div>
    </body>
</html>