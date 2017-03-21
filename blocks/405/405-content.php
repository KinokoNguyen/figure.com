<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-405">
    <div class="container">
        <div class="app">
            <a class="store-badge top" href="#" id="apple-store">
                <img src="http://<?php echo $url_path ?>/images/apple-app-store-en.svg" data-ga-action="AppStoreClick" id="apple1">
            </a>
            <a class="store-badge top" href="#" id="android-store">
                <img src="http://<?php echo $url_path ?>/images/google-app-store-en.svg" data-ga-action="PlayStoreClick" id="android1">
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
</div>

