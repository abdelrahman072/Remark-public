<?
$page = "dashboard";
include("./config.php");
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <? include('inc/styles.php'); ?>
    <!-- Custom css -->
</head>

<body class="animsition site-navbar-small <? echo $custome_class; ?>">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <? include('./inc/nav.php'); ?>
    <? include('./inc/menu.php'); ?>
    <!-- Page -->
    <div class="page">
        <? include('./pages/' . $page . '.php') ?>
    </div>
    <!-- End Page -->
    <!-- Footer -->
    <? include('./inc/footer.php'); ?>
    <!-- Script -->
    <? include('./inc/scripts.php'); ?>
    <!-- Custom script for this page -->
    <? echo $page_script; ?>
</body>

</html>