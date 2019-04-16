<!DOCTYPE html>
<html>
	<head>
		<title>view_page_admin</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="view\css\css_accueil_admin.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
		<div id="main_div">
			<table class="w3-table w3-bordered">
				<tr>
					<th>Prénom</th>
					<th>Nom</th>
					<th>Mail</th>
				</tr>
				<?php
					foreach ($all_users as $user) {
						//foreach entries in the table, create a line
						//balise <tr -> ligne   td -> colonne
						?>
						<tr>
							<td> <?php echo $user[2];  ?> </td>
							<td> <?php echo $user[1];  ?> </td>
							<td> <?php echo $user[0];  ?> </td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>
	</body>
</html>