<?php 

	$dsn="mysql:host=localhost;dbname=c_idiomas";
	$user="root";
	$password="";

	try{

		$conexiondb = new PDO($dsn,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES'UTF8'"));

		$consulta = "SELECT * from profesor";

		$resultado = $conexiondb->query($consulta);

			echo "CONEXION ESTABLECIDA!!!";

			echo "<table border=1px>
			<tr>
				<th>#</th>
				<th>NOMBRES</th>
				<th>IDIOMA</th>
				<th>ID-LECCION</th>
				<th>&nbsp</th>
			</tr>";

			foreach ($resultado->fetchAll() as $k => $profesor) 
			{
				echo "<tr>
						<td>".$k."</td>
						<td>".$profesor["p_nombre"]."</td>
						<td>".$profesor["p_idioma"]."</td>
						<td>".$profesor["id_leccion"]."</td>
						<td><form method='post' action='Eliminar.php'>
								<input type='hidden' name='id' value='".$profesor["id_profe"]."'>
								<input type='submit' name='eliminar' value='eliminar'>
							</form>
						</td>
					</tr>";
			}


	}catch(Exception $e){
		echo "Error: ".$e->getMessage();
	}

 ?>