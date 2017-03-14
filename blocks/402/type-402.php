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
    $less->compileFile('less/402.less', 'css/402.css');
    ?>

    <link href="css/402.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-402">
        <div class="container contact">
            <div class="title">Liên hệ</div>
            <ul>
                <li class="fa fa-home address">11 Fifth Ave, Loftus - NEW JERSEY, US</li>
                <li class="fa fa-phone telephone"><span>Telephone:</span> + 61 (2) 8093 3400</li>
                <li class="fa fa-fax fax"><span>Fax:</span> +61 (2) 9542 3599</li>
                <li class="fa fa-envelope email"><span>Email:</span> <i>submissions@domain.com</i></li>
            </ul>
        </div>
    </div>
</body>