<?php
include_once './user.class.php';
include_once './session.class.php';
if (isset($_SERVER['REQUEST_METHOD']) && strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    if (isset($_POST['sign_out'])) {
        if (Session::getUser()) {
            Session::deleteSession();
        }
    }
}
header('Location: ../');
exit();
?>
