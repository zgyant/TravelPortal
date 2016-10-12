<?php
if (Session::has('email')) {
    if (Session::get('type') == 'user') {
    if(isset($_GET['page'])) {
        if ($_GET['page'] == 'stories') {
            include(resource_path() . '\views\box\dash\header.blade.php');
            include(resource_path() . '\views\themes\dash\user\stories.blade.php');
            include(resource_path() . '\views\box\dash\footer.blade.php');
        }


        if ($_GET['page'] == 'list-booking') {
            include(resource_path() . '\views\box\dash\header.blade.php');
            include(resource_path() . '\views\themes\dash\user\list-booking.blade.php');
            include(resource_path() . '\views\box\dash\footer.blade.php');
        }
    }else{
        include(resource_path() . '\views\box\dash\header.blade.php');
        include(resource_path() . '\views\themes\dash\user\stories.blade.php');
        include(resource_path() . '\views\box\dash\footer.blade.php');
    }


    } elseif ((Session::get('type') == 'admin')) {

        if (isset($_GET['page'])) {
            if ($_GET['page'] == 'list-booking') {
                include(resource_path() . '\views\box\dash\header.blade.php');
                include(resource_path() . '\views\themes\dash\admin\list-booking.blade.php');
                include(resource_path() . '\views\box\dash\footer.blade.php');
            } elseif ($_GET['page'] == 'add-package') {
                include(resource_path() . '\views\box\dash\header.blade.php');
                include(resource_path() . '\views\themes\dash\admin\add-package.blade.php');
                include(resource_path() . '\views\box\dash\footer.blade.php');
            }
            elseif ($_GET['page'] == 'list-packages') {
                include(resource_path() . '\views\box\dash\header.blade.php');
                include(resource_path() . '\views\themes\dash\admin\list-packages.blade.php');
                include(resource_path() . '\views\box\dash\footer.blade.php');
            }
            elseif ($_GET['page'] == 'edit-package') {
                include(resource_path() . '\views\box\dash\header.blade.php');
                include(resource_path() . '\views\themes\dash\admin\edit-package.blade.php');
                include(resource_path() . '\views\box\dash\footer.blade.php');
            }
        }else{
            include(resource_path() . '\views\box\dash\header.blade.php');
            include(resource_path() . '\views\themes\dash\admin\list-booking.blade.php');
            include(resource_path() . '\views\box\dash\footer.blade.php');
        }
    }
} else {
    abort(403, 'Unauthorized action.');
}
?>