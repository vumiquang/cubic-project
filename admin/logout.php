<?php include_once('../config/db.php');?>
<?php
session_destroy();
header('location:'.SITEURL.'admin/login.php');