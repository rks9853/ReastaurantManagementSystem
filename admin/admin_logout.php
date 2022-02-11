<?php

include('../config/constant.php');

session_destroy();

header('location:admin_login.php');
?>