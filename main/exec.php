<?
session_start();
include('config.php');
header('Access-Control-Allow-Origin: *'); 
$data=array('status'=>'NO');
if($login&&!isset($action)){
	$sql=mysqli_query($mysqli_link,"select * from usuario where correo = '$email' and pass=md5('$pass') and status = 1");
	while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
		$_SESSION['user']['data']=$row; 
		$data=array('status'=>'OK');
	}
	if(!isset($_SESSION['user'])){
		$data['status']='Error';
		$data['msj']='Login o contraseña inválidos';
	}
}elseif ($action) {
	switch ($action) {
		case 'get_clientes':
			$sql=mysqli_query($mysqli_link,"SELECT * FROM clientes ");
			$data=array('status'=>'OK');
			while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
				$data["data"][]=$row;
			}
			break;
		case 'get_categorias':
			$sql=mysqli_query($mysqli_link,"SELECT * FROM categorias");
			$data=array('status'=>'OK');
			while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
				$data["data"][]=$row;
			}
			break;
		case 'get_categorias_only':
			$sql=mysqli_query($mysqli_link,"SELECT nombre FROM categorias where codigo = ".$cod);
				$data["data"]['nombre']=mysqli_result($sql,0);
			break;
		case 'get_menus':
			$sql=mysqli_query($mysqli_link,"SELECT * FROM menus where status = 0");
			$data=array('status'=>'OK');
			while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
				$data["data"][]=$row;
			}
			break;
		case 'addmenu':
			$count = 0;
			$sql = "INSERT INTO menus (nombre_menu,descripcion_menu,categoria_menu,status) VALUES ('$nombre_menu','$descripcion_menu',$categoria_menu,'$status')";
			mysqli_query($mysqli_link, $sql);
			$data["data"]['lastregister'] = mysqli_insert_id($mysqli_link);
			$data["data"]['status'] = 'OK';
			break;
	}
}
echo json_encode($data);
?>