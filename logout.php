<?php
session_start();
session_unset();
session_destroy();
 ?>

<?php
 header("Refresh:0; url=login.php");
?>
