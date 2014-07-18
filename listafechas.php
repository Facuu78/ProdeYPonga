<?= $msg ?>
<?php
	
	$local = listaTodasFechas('id_local', $fecha);
	$visitante = listaTodasFechas('id_visitante', $fecha);
	static $a = 1;
	
	while(isset($local) && $row_l = mysqli_fetch_assoc($local)) {
		if(isset($visitante) && $row_v = mysqli_fetch_assoc($visitante)) {
			if($row_l["id_local"] == $row_l["id_equipo_ganador"]){  
					echo "<li class='list-group-item'>
					<span class='badge'>".$row_l['descripcion']."</span>";
			}else{
				echo "<li class='list-group-item'>
				<span class='badge'>".$row_v['descripcion']."</span>";
			}
			
			echo "  <div class='row'>
						<div class='col-md-2'>". $row_l['descripcion']."</div>
						<div class='col-md-2'> VS </div>
						<div class='col-md-2'>". $row_v['descripcion'] ."</div>
					</div>";									
			$a++;
			echo "</li>";
		}
	}

?>