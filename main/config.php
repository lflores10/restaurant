<?
session_start();
error_reporting();
date_default_timezone_set('America/Caracas');
header('Content-Type: text/html; charset=UTF-8');

$mysqli_link = mysqli_connect(
	"localhost", 
	"root", 
	"77693286", 
	"restaurant") or exit("No se puede conectar");

extract($_GET);
extract($_POST);
function mysqli_result($res, $row, $field=0) { 
    $res->data_seek($row); 
    $datarow = $res->fetch_array(); 
    return $datarow[$field]; 
} 

?>
