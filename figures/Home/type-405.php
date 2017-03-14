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
    $less->compileFile('less/405.less', 'css/405.css');
    ?>

    <link href="css/405.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="type-405">
        <div class="app">
            <a class="store-badge top" href="#" id="apple-store">
                <img src="images/apple-app-store-en.svg" data-ga-action="AppStoreClick" id="apple1">
            </a>
            <a class="store-badge top" href="#" id="android-store">
                <img src="images/google-app-store-en.svg" data-ga-action="PlayStoreClick" id="android1">
            </a>
        </div>
        <footer>
            <nav class="footer-links">
                <li>
                    <a href="#">Giới thiệu</a>
                </li>
                <li>
                    <a href="#">Điều khoản dịch vụ</a>
                </li>
                <li>
                    <a href="#">Riêng tư</a>
                </li>
                <li>
                    <a href="#">Bản quyền</a>
                </li>
            </nav>
        </footer>
    </div>
</body>