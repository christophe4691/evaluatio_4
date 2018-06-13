<!DOCTYPE html>
<html>
	<head>
		<title>Gestion des réservations</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale-1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
<body>
	<h1 class="text-logo"><span class="glyphicon glyphicon-home"></span> Gestions des réservations <span class="glyphicon glyphicon-home"></span></h1>
	<div class="container insert">
		<div class="row">
			<h1><strong>Suppréssion d'une réservations </strong></h1>

			 <?php

				require 'database.php';
				$db = Database::connect();
				$statement = $db->query('SELECT * FROM `reservations` WHERE 5');
				$reservation = $statement->fetch();
				Database::disconnect();
							
			?> 

			<div class="container delete">
			<div class="row">
				<form class="form" role="form" action="delete.php" method="post">
					<input type="hidden" name="id" value="<?php echo $id;?>"/>
					<p class="alert alert-warning">Etes vous sur de vouloir supprimer la réservation ?</p>
					
						<div class="form-group">
							<label>Client :</label>
							<select>
								<option><?php echo '  ' . $reservation['clientId']; ?></option>
							</select>
							
							<label>Chambre :</label>
							<select>
								<option><?php echo '  ' . $reservation['chambreId']; ?></option>
							</select>
							
							<label>Du :</label>
							<select>
								<option><?php echo '  ' . $reservation['dateEntree']; ?></option>
							</select>
							
							<label>Aux :</label>
							<select>
								<option><?php echo '  ' . $reservation['dateSortie']; ?></option>
							</select>
						</div>

					<div class="form-actions">
						<button type="submit" class="btn btn-warning">Confirmer la suppréssion</button>
						<a class="btn btn-default" href="admin.php"> Annuler</a>
					</div>	
				</form>
			</div>
		</div>
	</body>
</html>