<?php

//error_reporting(E_ALL);
require_once "{$basya_relative_path}functions.php";

$role = defineRole();
$_SESSION['role'] = $role;
//echo $role;
//echo "<br/>";

$role_path = './template/include/role.php';
