<form method="post" action="<?= $_SERVER['PHP_SELF']?>">
	<input type="number" name="id_profe" placeholder="ingrese id del profesor"><br>
	<input type="text" name="estado" placeholder="ingrese estado"><br>
	<input type="text" name="c_profesor" placeholder="ingrese comentarios"><br>
	<input type="text" name="c_estudiante" placeholder="ingrese comentarios"><br>
	<input type="number" name="id_programacion" placeholder="ingrese identificador"><br>
	<input type="submit" name="guardar" value="guardar">
</form>

<?php 

	if (isset($_POST["guardar"])) 
	{
		$id_profe = $_POST["id_profe"];
		$estado = $_POST["estado"];
		$c_profesor = $_POST["c_profesor"];
		$c_estudiante = $_POST["c_estudiante"];
		$id_programacion = $_POST["id_programacion"];

		$dsn="mysql:host=localhost;dbname=c_idiomas";
		$user="root";
		$password="";

		try{

			$conexiondb = new PDO($dsn,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES'UTF8'"));

			$insertar = "INSERT into leccion(id_profe,estado,c_profesor,c_estudiante,id_programacion) values('$id_profe','$estado','$c_profesor','$c_estudiante','$id_programacion')";

			$insertado = $conexiondb->exec($insertar);

			if($insertado != 0)
			{
				header("location: lecciones.php");
			}else{
				echo "INFORMACION NO GUARDADA";
			}

		}catch(Exception $e){
			echo "Error: ".$e->getMessage();
		}

	}

 ?>