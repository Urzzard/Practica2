<?php 

	$dsn="mysql:host=localhost;dbname=c_idiomas";
	$user="root";
	$password="";

	try{

		$conexiondb = new PDO($dsn,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES'UTF8'"));

		$consultal = "SELECT * from leccion";

		$resultadol = $conexiondb->query($consultal);

			echo "CONEXION ESTABLECIDA!!!";

			echo "<table border=1px>
			<tr>
				<th>#</th>
				<th>ID_POFESOR</th>
				<th>ESTADO</th>
				<th>COMENTARIO_PROFE</th>
				<th>COMENTARIO_ESTUDIANTE</th>
				<th>&nbsp</th>
			</tr>";

			foreach ($resultadol->fetchAll() as $k => $leccion) 
			{
				echo "<tr>
						<td>".$k."</td>
						<td>".$leccion["id_profe"]."</td>
						<td>".$leccion["estado"]."</td>
						<td>".$leccion["c_profesor"]."</td>
						<td>".$leccion["c_estudiante"]."</td>
						<td><form method='post' action='Eliminar.php'>
								<input type='hidden' name='id' value='".$leccion["id_profe"]."'>
								<input type='submit' name='eliminar' value='eliminar'>
							</form>
						</td>
					</tr>";
			}


	}catch(Exception $e){
		echo "Error: ".$e->getMessage();
	}

 ?>