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
        <div class="type-403">
            <div class="container content">
                <div class="app-info">
                    <div class="title"> Hoạt động bên lĩnh vực </div>
                    <ul class="text-info medium-minus-hide">
                        <li>View rare conditions, innovative treatments, and teaching cases from around the world</li>
                        <li>Page more than 1 million healthcare professionals for instant feedback</li>
                        <li>Communicate with colleagues using HIPAA-compliant direct messaging</li>
                    </ul>
                    <div class="web-app-links">
                        <a class="register-link" href="#">Sign Up</a>
                        <a class="login-link" href="#" >Log In</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>