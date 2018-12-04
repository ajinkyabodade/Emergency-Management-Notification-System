


<?php

ob_start();
session_start();
unset($_SESSION['ufname']);
unset($_SESSION['userid']);
unset($_SESSION['adharno']);
unset($_SESSION['uemail']);

echo '<script type="text/javascript">window.location="udashboard.php"; </script>';


?>