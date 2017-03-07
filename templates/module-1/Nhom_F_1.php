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
         $less->compileFile('less/mod-1.less', 'css/mod-1.css');
         ?>
      <link href="css/mod-1.css" rel="stylesheet" type="text/css"/>
   </head>
   <body>
      <header class="mod-1"><a href="/" class="logo"><img src="images/logo.png"></a></header>
   </body>
</html>