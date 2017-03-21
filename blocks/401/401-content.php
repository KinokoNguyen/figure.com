<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-401">
    <div class="container top-menu">
        <!--LOGO-->
        <div class="logo">
            <a href="#">
                <img src="http://<?php echo $url_path ?>/images/logo.png" alt="" style="width: 100px; height: 50px;"/>
            </a>
        </div>
        <!--END LOGO-->

        <!--MAIN MENU-->
        <div class="">
            <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
            <div class="clear"></div>
        </div>

        <div class="navbar-collapse">
            <ul class="menu nav navbar-nav navbar-right collapse collapse-top-menu">
                <li class="item active"><a href="#">Medical case</a></li>
                <li class="item"><a href="#">View</a></li>
                <li class="item"><a href="#">Mobile</a></li>
                <li class="item"><a href="#">Asus</a></li>
                <li class="item"><a href="#">Quiz</a></li>
            </ul>
        </div>
        <!--END MAIN MENU-->
    </div>
</div>