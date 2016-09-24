<?php
if (Session::has('email')) {
    if (Session::get('type') == 'user') {

        echo 'this is user';
    } else {
        echo 'this is admin';
    }
} else {
    abort(403, 'Unauthorized action.');

}
?>