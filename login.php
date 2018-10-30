<?php 

    if (isset($_POST)) {

	session_start();
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$con = new mysqli('localhost', 'root', '123', 'tv');

	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

	$sql = "SELECT * FROM acesso WHERE usuario = '".$usuario."' AND senha = '".$senha."'";

	$result=mysqli_query($con,$sql);

	$row = mysqli_fetch_assoc($result);

	if($result->num_rows > 0)
	{
			$_SESSION['usuario'] = $row['usuario'];
			$_SESSION['senha'] = $row['senha'];
			$_SESSION['administrador'] = $row['administrador'];
			header('location:home.php');
	}
	else{
	  unset ($_SESSION['usuario']);
	  unset ($_SESSION['senha']);
	  unset ($_SESSION['administrador']);
	  header('location:index.php');
	  }

	}
?>