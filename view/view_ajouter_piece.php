<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ajonter piece</title>
</head>

<body>
    
    <div class="container">
		<h2 class="form_Ajonter_piece">Ajonter la piece</h2>
		<form  action="../controller/controller_ajouter_piece.php" class="ajouter_piece" method="post">
			<input type="text" name="name" class="form-control" placeholder="name">
            <input type="text" name="area" class="form-control" placeholder="area">
           
			<p>
				<button class="btn btn-primary" type="submit">submit</button>
			</p>
		</form>
		

	</div>

</body>
</html>