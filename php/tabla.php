
<?php 
	session_start();
	require_once "conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	
		<table class="table table-hover table-condensed table-bordered">
		
			<tr>
				<td>id</td>
				
				<td>Email</td>
				<td>Telefono</td>
				
			</tr>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id,email,telefono 
						from t_persona where id='$idp'";
					}else{
						$sql="SELECT id,email,telefono 
						from t_persona";
					}
				}else{
					$sql="SELECT id,email,telefono 
						from t_persona";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2];
						  
						   
			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				
				
				
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>