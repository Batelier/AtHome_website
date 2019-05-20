<html>
<?php
session_start();
require("C:/wamp64/www/AtHome/model/model_accueil_client.php");
$q = $_GET["q"];

db_connect();
global $db;
$req = $db->prepare('SELECT name FROM room INNER JOIN home ON home.home_id =room.home_id WHERE address = ? AND user_id = ?');
$req->execute(array($q, $_SESSION['id']));

$reponse = query_captors();
$reponse1 = query_captors();
$reponse2 = get_addresses((int)$_SESSION['id']);
$reponse3 = get_name_room((int)$_SESSION['id']);


while ($donnees3 = $req->fetch()){ ?>
<div class="piece">
					<div class="infos_principales">
						<div class="nom_piece">
							<p><?php echo $donnees3[0]; ?> <p>
						</div>
						<div class="pb">
							<div class="pb_img">
								<img  src="/AtHome/res/pb_jpg.jpg" width="20em" height="20em">
							</div>
							<div class="pb_lien">
								<a href="lienpbs">Problèmes</a>
							</div>
						</div>
						<div class="routine">
							<p>Routine : Eco</p>
						</div>
					</div>
					<div class="infos_supplementaires">
						<div class="bloc1">
							<div class="piece_img">
								<img src="/AtHome/res/cuisine.jpg" width="70em" height="70em"> 
							</div>
							<div class="gestion_piece">
								<a href="">Gérer pièce</a>
							</div>
						</div>
						<div class="liste_capteurs">
						<?php 
						while ($donnees = $reponse->fetch()){
						?>
							<div class="capteur">
								<p> <?php echo ($donnees['model'])?> </p>
									<label class="switch">
										<input type="checkbox">
										<span class="slider round"></span>
									</label>
								<form method="post">
									<input name="id_capteur" type="hidden" value=" <?php echo ($donnees['equipment_id'])?>">
									<input name="supprimer_capteur" type="submit" value="Supprimer">
								</form>
							</div>
						<?php } ?>
						</div>
						<div class="ajouter_capteur">
							<form method="post" > <!-- action="/AtHome/model/model_ajouter_capteur.php"-->
								<select name="capteurs" size="1">
									<option>Choisir</option>
									<option>Luminosité</option>
									<option>Température</option>
									<option>Fumée</option>
								</select>
								<input type="submit" value="Ajouter" name="add_sensor">
							</form>
						</div>
					</div>
				</div>
<?php } ?>

</html>