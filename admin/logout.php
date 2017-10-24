<?php

include('common/config.php');

unset($_SESSION['admin_id']);

header('location:login.php');
?>