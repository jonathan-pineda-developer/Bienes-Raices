<!DOCTYPE html>
<html lang="en">
<head>
    <title>TIPOS DE CONTRATO</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<div class="container">
		<div class="row my-5">
			<div class="col">
				<div class="table-responsive">
					<table class="table table-striped table-hover table-sm table-bordered">
						
						<thead>
							<tr class="table-dark">
							    <th>Identificador</th>
								<th>Tipo de contrato</th>
								<th>Actualizar</th>
								<th>Eliminar</th>
							
							</tr>
						</thead>
					<tbody>
						<?php
						
						require('../connect.php');
							$query="SELECT * FROM TIPO_CONTRATOS";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
							while($fila=oci_fetch_array($stid,OCI_ASSOC)){
								print "<tr>
								    <td>".$fila['TIPO_CONTRATOS']."</td>
									<td>".$fila['CONTRATO']."</td>
									<td><a href='actualizarTContrato.php?id=".$fila['TIPO_CONTRATOS']."'>Actualizar</a></td>
									<td><a href='eliminarTContrato.php?id=".$fila['TIPO_CONTRATOS']."'>Eliminar</a></td>
							
								</tr>";
							}
						?>		
					</tbody>
				</table>
				
			</div>
		</div>
			<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<div>
							<a href="../home.php">
								<button type="submit" class="col-12 btn btn-primary">Atras</button>
							</a>
						</div>
					</div>
				</div>
	</div>
	<script src="../js/bootstrap.bundle.min.js"></script>
	
</body>
</html> 