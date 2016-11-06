<?php
define("RELATIVE", "..");
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once RELATIVE.'/includes/config.php';
require_once RELATIVE.'/includes/computer.php';

$computer = new computer();

$computer->Load('id=?', $_GET['pk']);
$computer->delete();

?>
<script>
    window.location = 'index.php';
</script>
