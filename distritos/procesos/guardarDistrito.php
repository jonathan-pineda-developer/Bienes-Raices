<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilos.css">
	<title>Guardar Distrito</title>
</head>
<body>
<?php
			try{
			
	            require('../../connect.php');
	            $id_canton=$_POST['id_distrito'];
	            $nombre=$_POST['descripcion'];
                $s = oci_parse($conexion,"CALL SP_INS_DISTRITO ('" . $id_canton . "','" . $nombre . "')");

		        $r = oci_execute($s,OCI_COMMIT_ON_SUCCESS);
		
			if($r){
				echo '
					<div class="row">
						<div class="col-12 col-md-6 mb-3">
							<div class="alert alert-success d-flex align-items-center" role="alert">
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
								<div>
									Distrito agregado!
								</div>
							</div>
						</div>
					</div>    		
				';
			}else{
				throw new Exception();
			}
			
			} catch (Exception $e) {
				echo '
					<div class="row">
						<div class="col-12 col-md-6 mb-3">
							<div class="alert alert-danger d-flex align-items-center" role="alert">
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
								<div>
									Error al agregar distrito!
									<script src="../../js/bootstrap.bundle.min.js"></script>
								</div>
							</div>
						</div>
					</div>
				';
			} finally {
				echo '
				<div class="row mt-3">
						<div class="col-6 d-flex justify-content-center">
							<div>
								<a href="../crearDistrito.php">
									<button type="submit" class="col-12 btn btn-primary">Atras</button>
								</a>
							</div>
						</div>
					</div>
				';
			}
		
	?>
		<script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>