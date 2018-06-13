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
			<h1><strong>Ajouter / Modifier des réservations </strong></h1>

			 <?php

				require 'database.php';
				$db = Database::connect();
				$statement = $db->query('SELECT * FROM `reservations` WHERE 5');
				$reservation = $statement->fetch();
				Database::disconnect();
							
			?> 

			<div class="form-group">
				<label>Client :</label>
				<select>
					<option><?php echo '  ' . $reservation['clientId']; ?></option>
				</select>
				
				<label>Chambre :</label>
				<select>
					<option><?php echo '  ' . $reservation['chambreId']; ?></option>
				</select>
				
				<label>Date entrée :</label>
				<select>
					<option><?php echo '  ' . $reservation['dateEntree']; ?></option>
				</select>
				
				<label>Date sortie :</label>
				<select>
					<option><?php echo '  ' . $reservation['dateSortie']; ?></option>
				</select>
				
				<label>Statut :</label>
				<select>
					<option><?php echo '  ' . $reservation['statut']; ?></option>
				</select>
			</div>

			<div class="form-actions">
				<a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Enregistrer</a>

				<a class="btn btn-primary" href="admin.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
			</div>

		</div>
	</div>
</body>
</html>