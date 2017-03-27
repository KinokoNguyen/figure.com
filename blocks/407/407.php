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
    <div class="type-407">
        <div class="container">
            <div class="row">
                <!--PAGE ERROR-->
                <div class="page-not-found">
                    <!--TITLE-->
                    <div class="title">
                        <h2>Đã xảy ra lỗi!</h2>
                        <h1 id="error" class="center wow fadeInRight" data-wow-duration="2s">0</h1>
                        <h5>Không tìm thấy trang!</h5>
                    </div>
                    <!--END TITLE-->
                    <!--ICON-->
                    <div class="icon">
                        <div id="cflask-holder" class="wow fadeIn" data-wow-delay="2800ms">
                            <span class="wow tada " data-wow-delay="3000ms"><i class="fa fa-flask fa-5x flask wow flip" data-wow-delay="3300ms"></i> 
                                <i id="b1" class="bubble"></i>
                                <i id="b2" class="bubble"></i>
                                <i id="b3" class="bubble"></i>
                            </span>
                        </div>
                    </div>

                    <!--END ICON-->
                    <!--SEARCH-->
                    <div class="search">
                        <form action="#" method="get">
                            <input type="text" placeholder="Search" class="col-md-9 col-xs-12">
                            <input type="submit" value="Search" class="col-md-3 col-xs-12">
                        </form>
                        <div class="clearfix"></div>
                    </div>
                    <!--END SEARCH-->
                </div>
                <!--END PAGE ERROR-->
            </div>         
        </div>
    </div>
    <script type="text/javascript">
        "use strict";
        var count = new countUp("error", 0, 404, 0, 3);

        window.onload = function () {
            // fire animation
            count.start();
        }
    </script>
</body>

