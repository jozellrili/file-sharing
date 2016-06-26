<?php
session_start();
// Unset all of the session variables.
$_SESSION = array();
// kill the session, also delete the session cookie.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
//destroy the session.
session_destroy();
header('Refresh: 0; URL = index.php');
?>