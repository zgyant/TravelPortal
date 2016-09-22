<?php
$title = "";
if ($_SERVER['REQUEST_URI'] == "/") {
    $title = "Welcome to Travel Portal.";
    include(resource_path() . '\views\box\header.blade.php');
    include(resource_path() . '\views\themes\home.blade.php');
    include(resource_path() . '\views\box\footer.blade.php');
} elseif ($_GET['page'] == "aboutus") {
    $title = "Know about us";
    include(resource_path() . '\views\box\header.blade.php');
    include(resource_path() . '\views\themes\aboutus.blade.php');
    include(resource_path() . '\views\box\footer.blade.php');

} elseif ($_GET['page'] == "contactus") {
    $title = "Contact us";
    include(resource_path() . '\views\box\header.blade.php');
    include(resource_path() . '\views\themes\contactus.blade.php');
    include(resource_path() . '\views\box\footer.blade.php');

} elseif ($_GET['page'] == "activities") {
    # code...
    $title = "Know about Rafting";
    include(resource_path() . '\views\box\header.blade.php');
    include(resource_path() . '\views\themes\activities.blade.php');
    include(resource_path() . '\views\box\footer.blade.php');
}

?>	
