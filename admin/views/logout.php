


<?php

ob_start();
session_start();
unset($_SESSION['fname']);

unset($_SESSION['adminid']);
unset($_SESSION['email']);

echo '<script type="text/javascript">window.location="index.php"; </script>';


?>