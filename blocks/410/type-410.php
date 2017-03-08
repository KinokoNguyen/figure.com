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
    $less->compileFile('less/type-410.less', 'css/type-410.css');
    ?>
    <link href="css/type-410.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  
    <link href="css/ember-app-46169a8a9b3335b0592cb58c3df86fe3.css" rel="stylesheet" type="text/css"/>

</head>

<body style="min-width: auto;">
    <div class="type-410">
        <div class="ember-view">
            <div class="landing-page">
                <div class="cover-bg"></div>
                <div class="logo">
                    <img src="assets/img/logo-alt.svg" alt="logo">
                </div>

                <!--CONTENT LOGIN-->
                <div class="ember-view">
                    <div class="liquid-child">

                        <div class="top-links">
                            <span>Don't have an account yet?</span>
                            <a href="#">Sign Up</a>
                        </div>

                        <!--LOGIN-->
                        <div class="login-page account-container">
                            <h1>Discuss and share medical cases with a global community of healthcare professionals</h1>

                            <!--FORM LOGIN-->
                            <main>
                                <form id="login-form">
                                    <input type="text" name="email" placeholder="Email Address" class="simple-input">
                                    <hr>
                                    <input type="password" name="password" placeholder="Password" class="simple-input">
                                </form>
                            </main>
                            <!--/END FORM LOGIN-->

                            <!--BUTTON SUBMIT-->
                            <button type="submit" form="login-form" class="submit-button black">
                                Sign In
                            </button>
                            <!--/END BUTTON SUBMIT-->

                            <!--CHECK REMEMBER-->
                            <div class="extra-login-options">
                                <div id="ember424" class="checkbox white">
                                    <input type="checkbox" id="remember-me">
                                    <label for="remember-me" class="box"></label>
                                </div> 
                                <label for="remember-me" class="noselect">Remember my password</label>
                                <div class="pull-right">
                                    <a href="#">Forgot your password?</a>
                                </div>
                            </div>
                            <!--/END CHECK REMEMBER-->

                        </div>
                        <!--/END LOGIN-->

                    </div>
                </div>
                <!--/END CONTENT LOGIN-->
            </div>
        </div>
    </div>
</body>
