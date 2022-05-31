<?php
session_start();

session_destroy();

header ("location: IndexPrincipal.php");

exit();
?>