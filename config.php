<?
// GET / POST
extract($_GET);
extract($_POST);
// ERROR AND WARNINIGS
error_reporting(E_ERROR | E_PARSE);
if ($error) {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}
// IF PAGE OS NOT DEFINED
if (!$page) {
    $page = "dashboard";
};
// PAGE LIST WITH ASIDE RIGHT
$aside_fixed_right = ['aside_right_fixed'];
// PAGE LIST WITH ASIDE LEFT
$aside_fixed_left = ['aside_left_fixed'];
if (in_array($page, $aside_fixed_right)) {
    $custome_class = "page-aside-fixed page-aside-right";
} else if (in_array($page, $aside_fixed_left)) {
    $custome_class = "page-aside-fixed page-aside-left";
} else {
    $custome_class = "";
}
