<?php
require_once("localhack/LocalHack.php");
$localHack = new LocalHack();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Deepthought - localhost</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="localhack/assets/css/bootstrap.css" rel="stylesheet">
    <link href="localhack/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="localhack/assets/css/deepthought.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

<div id="header"></div>

<div class="container">

    <h1>Deepthought - localhost</h1>
    <div class="span6">
        <h2>Projekte</h2>
        <?php
        echo $localHack->getDirectoryList();
        ?>
    </div>
    <div class="span5">
        <h2>Dateien</h2>
        <table class="table">
            <?php
            echo $localHack->getFileList();
            ?>
        </table>
    </div>


</div> <!-- /container -->

</body>
</html>
