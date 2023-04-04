<?php 

//null coalescing operatior instead of longer ----> $id = isset($_GET['id']) ? $_GET['id'] : '1'; with '1' as the default value
$id = $_GET['id'] ?? '1';
echo $id;
?>