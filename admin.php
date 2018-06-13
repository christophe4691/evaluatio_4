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
	<div class="container admin">
		<div class="row">
			<h1><strong>Liste des réservations </strong></h1>
				<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Client</th>
								<th>Chambre</th>
								<th>Dates</th>
								<th>Statut</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							 <?php

							require 'database.php';
							$db = Database::connect();
							$statement = $db->query('SELECT * FROM `reservations` WHERE 1');
							while($reservation = $statement->fetch())
							{
								echo '<tr>';
								echo '<td>' . $reservation['id'] . '</td>';
								echo '<td>' . $reservation['clientId'] . '</td>';

								echo '<td>' . $reservation['chambreId'] . '</td>';
								echo ' ';
								echo '<td>' . $reservation['dateEntree'] . '<p>aux</p>' . $reservation['dateSortie'] . '</td>' ;
								echo '<td>' . $reservation['statut'] . '</td>';	
								echo '<td width="300">';
								echo ' ';
								echo '<a class="btn btn-primary" href="insert.php?id=' . $reservation['id'] . '"><span class="glyphicon glyphicon-pencil"></span> Editer</a>';
								echo ' ';
								echo '<a class="btn btn-danger" href="delete.php?id=' . $reservation['id'] . '"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
								echo '</td>';
								echo '</tr>';
							}
							Database::disconnect();
							?> 
						</tbody>
				</table>
  			</div>
		</div>
	</body>
</html>