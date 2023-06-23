<?php
    include_once("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <title>Medicamentos</title>
    <script src="js/jquery.min.js"></script> 
</head>
<body>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<center><span><H1>Medicamentos de Canteros Javier Esteban</H1></span></center>
					<table>
                        <thead>
                                <tr class="table100-head">
                                    <th class="column1">Fecha de Inicio</th>
                                    <th class="column2">Fecha de Fin</th>
                                    <th class="column3">Nombre de Medicamento</th>
                                    <th class="column4">Droga</th>
                                    <th class="column5">Farmaceutica</th>
                                    <th class="column6">Dosis</th>
                                    <th class="column7">Tratamiento</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php 
                            $sql_query = "SELECT fechainicio, fechafin,nombremedicamento,droga,farmaceutica,dosis,tratamiento FROM Med_medicamentos";
                            $resultset = mysqli_query($conn, $sql_query) or die("error base de datos:". mysqli_error($conn));
                            while( $libro = mysqli_fetch_assoc($resultset) ) {
                            ?>
                            <tr>
                                <td class="column1"><?php echo $libro ['fechainicio']; ?></td>
                                <td class="column2"><?php echo $libro ['fechafin']; ?></td>
                                <td class="column3"><?php echo $libro ['nombremedicamento']; ?></td>
                                <td class="column4"><?php echo $libro ['droga']; ?></td>   
                                <td class="column5"><?php echo $libro ['farmaceutica']; ?></td>  
                                <td class="column6"><?php echo $libro ['dosis']; ?></td>  
                                <td class="column7"><?php echo $libro ['tratamiento']; ?></td>  
                            </tr>
                            <?php } ?>
                        </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>