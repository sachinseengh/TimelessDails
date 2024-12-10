<?php

session_start();
session_unset();
session_destroy();
session_abort();


setcookie('username', '', time() - 3600, '/');

header('Location: /NepaliFootprints/users/adminlogin.php?Msg=' . urlencode("Logout Successfully"));
exit();



?>