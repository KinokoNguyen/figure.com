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
         $less->compileFile('less/mod-5.less', 'css/mod-5.css');
         ?>
      <link href="css/mod-5.css" rel="stylesheet" type="text/css"/>
   </head>
   <body >
      <div class="mod-5">
         <main>
            <div class="app-display">
               <img src="images/phones-en.png">
            </div>
         </main>
      </div>
   </body>
</html>