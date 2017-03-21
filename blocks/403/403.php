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
        $less->compileFile('less/403.less', 'css/403.css');
        ?>
        <link href="css/403.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6'>
                    <?php include './403-content.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>