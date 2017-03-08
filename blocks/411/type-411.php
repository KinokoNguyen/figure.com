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
        <div class="container">
            <div class="row">
                <!--BACKGROUND-->
                <div class="cover-bg"></div>
                <!--/END BACKGROUND-->

                <!--TOP LINKS-->
                <div class="top-links">
                    <span>Already have an account?</span>
                    <a href="#">Sign In</a>
                </div>
                <!--/END TOP LINKS-->

                <!--REGISTER-->
                <div class="landing-page">
                    <!--LOGO-->
                    <div class="logo">
                        <img src="images/logo-alt.svg" alt="logo">
                    </div>
                    <!--/END LOGO-->

                    <!--FORM REGISTER-->
                    <div class="register-page account-container">
                        <h1>Sign up below with your email address</h1>

                        <main>
                            <!--INPUT REGISTER-->
                            <div class="input-validation">
                                <input type="text" name="username" placeholder="Username (e.g. jane_doe)" class="simple-input">
                            </div>
                            <hr>
                            <div class="input-validation">
                                <input type="text" name="email" placeholder="Email Address" class="simple-input">
                            </div>
                            <hr>
                            <div class="input-validation">
                                <input type="password" name="password" placeholder="Password" class="simple-input">
                            </div>
                            <hr>
                            <div class="input-validation">
                                <input type="password" name="confirm-password" placeholder="Repeat Password" class="simple-input">
                            </div>			
                            <hr>
                            <!--/END INPUT REGISTER-->

                            <!--SELECT REGISTER-->
                            <div class="specialty-select">	
                                <div class="basic-select-menu">
                                    <select name="specialty-category">	
                                        <option>I am a</option>
                                        <option>Physician</option>
                                        <option>Medical Resident</option>
                                        <option>Nursing Professional</option>
                                        <option>Dentistry</option>
                                        <option>Other Healthcare Professional</option>
                                        <option>Student</option>
                                        <option>Non-Healthcare Professional</option>
                                    </select>
                                    <svg x="0px" y="0px" width="13px" height="8px" viewBox="0 0 13 8" enable-background="new 0 0 13 8">
                                    <path d="M6.7,7.2l-6-6l0.9-0.9l5.1,5.1l5.1-5.1l0.9,0.9L6.7,7.2z"></path>
                                    </svg>
                                </div>

                                <div class="basic-select-menu">
                                    <select>	
                                        <option>My specialty is </option>
                                    </select>
                                    <svg x="0px" y="0px" width="13px" height="8px" viewBox="0 0 13 8" enable-background="new 0 0 13 8">
                                    <path d="M6.7,7.2l-6-6l0.9-0.9l5.1,5.1l5.1-5.1l0.9,0.9L6.7,7.2z"></path>
                                    </svg>
                                </div>	
                            </div>
                            <!--SELECT REGISTER-->

                            <!--CONFIRM REGISTER-->
                            <div class="register-tos-confirm">
                                <div class="input-validation">
                                    <div class="checkbox grey">
                                        <input type="checkbox" id="accept-tos">
                                        <label class="box"></label>
                                    </div>
                                    <label class="noselect">I have read and agree to the <button>Terms of Service</button></label>
                                </div>
                            </div>
                            <!--/END CONFIRM REGISTER-->

                        </main>

                        <button class="submit-button blue">
                            Create Account
                        </button>

                    </div>
                    <!--/END FORM REGISTER-->

                </div>
                <!--/END REGISTER-->
            </div>
        </div>
    </div>
</body>
