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
    <link href="css/bootstrap-social.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-410">
        <div class="container">
            <div class="row">
                <!--BACKGROUND-->
                <div class="cover-bg"></div>
                <!--/END BACKGROUND-->

                <!--TOP LINKS-->
                <div class="top-links">
                    <span>Don't have an account yet?</span>
                    <a href="#" class="ember-view">Sign Up</a>

                    <!--GOOGLE-->
                    <div class="btn-top-links">
                        <div class="btn-top-links">
                            <a class="btn btn-block btn-social btn-google" href="#">
                                <i class="fa fa-google-plus"></i>
                                Google
                            </a>
                        </div>
                        <!--/END GOOGLE-->

                        <!--FACEBOOK-->
                        <div class="btn-top-links">
                            <a class="btn btn-block btn-social btn-facebook" href="#">
                                <i class="fa fa-facebook"></i>
                                Facebook
                            </a>
                        </div>
                        <!--/END FACEBOOK-->
                    </div>
                </div>
                <!--/END TOP LINKS-->



                <!--LOGIN-->
                <div class="landing-page">
                    <!--LOGO-->
                    <div class="logo">
                        <img src="images/logo-alt.svg" alt="logo">
                    </div>
                    <!--/END LOGO-->

                    <!--FORM LOGIN-->
                    <div class="login-page account-container">
                        <h1>Discuss and share medical cases with a global community of healthcare professionals</h1>

                        <main>
                            <form>
                                <input type="text" name="email" placeholder="Email Address" class="simple-input">
                                <hr>
                                <input type="password" name="password" placeholder="Password" class="simple-input">
                            </form>

                            <button type="submit" form="login-form" class="submit-button black">
                                Sign In
                            </button>
                        </main>

                        <div class="extra-login-options">
                            <div class="checkbox white">
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me" class="box"></label>
                            </div> 

                            <label for="remember-me" class="noselect">Remember my password</label>

                            <div class="pull-right">
                                <a href="#" >Forgot your password?</a>
                            </div>
                        </div>

                    </div>
                    <!--/END FORM LOGIN-->

                </div>
                <!--/END LOGIN-->
            </div>
        </div>
    </div>
</body>
