<html>
<script type="text/javascript" src="/AtHome/res/js/client_popup_ajouter_piece.js"></script>
<?php
session_start();
require("C:/wamp64/www/AtHome/model/model_accueil_client.php");
$q = $_GET["q"];

db_connect();
global $db;
$req = $db->prepare('SELECT name, room_id FROM room INNER JOIN home ON home.home_id =room.home_id WHERE address = ? AND user_id = ?');
$req->execute(array($q, $_SESSION['id']));

$req_home_id = $db->prepare('SELECT home_id FROM home WHERE user_id = ? AND address = ?');
$req_home_id->execute(array($_SESSION['id'],$q));
$value_home_id = $req_home_id->fetch();

$reponse2 = get_addresses((int)$_SESSION['id']);
$reponse3 = get_name_room((int)$_SESSION['id']); ?>

<form method='post'>
	<input type="hidden" name="home_id" value= "<?php echo $value_home_id[0];?>">
	<input id="del_home" name="delete_home" type='submit' value='Supprimer Home'>
</form>
		
<?php
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
							<div class="delete_piece">
								<form method="post">
									<input name="identi_room" type="hidden" value=" <?php echo ($donnees3['room_id'])?>">
									<input type="submit" name ="button_delete_room" id="button_manage_room" value="Supprimer">
								</form>
							</div>
						</div>
						<div class="liste_capteurs">
						<?php 
						$reponse = query_captors_by_room($donnees3['room_id']);
						while ($donnees = $reponse->fetch()){
						?>
							<div class="capteur">
								<p> <?php echo ($donnees['model'])?> </p>
								<?php if ($donnees['model']=='RTY'){?>
								<input class="echelle" type="range"><?php } else{ ?>
									<label class="switch">
										<input type="checkbox">
										<span class="slider round"></span>
									</label>
								<?php } ?>
								<form method="post">
									<input name="ident_room" type="hidden" value=" <?php echo ($donnees3['room_id'])?>">
									<input name="id_capteur" type="hidden" value=" <?php echo ($donnees['equipment_id'])?>">
									<input name="supprimer_capteur" type="submit" value="Supprimer">
								</form>
							</div>
						<?php } ?>
						</div>
						<div class="ajouter_capteur">
							<form method="post" > <!-- action="/AtHome/model/model_ajouter_capteur.php"-->
								<select name="capteurs" size="1">
									<option> Choisir </option>
									<?php
									$reponse1 = query_captors();
									while ($donnees1 = $reponse1 -> fetch()){
									?>
									<option><?php echo $donnees1['model'] ?></option>
									<?php } ?>
								</select>
								
								<input name="id_room" type="hidden" value=" <?php echo ($donnees3['room_id'])?>">
								<input type="submit" value="Ajouter" name="add_sensor">
							</form>
						</div>
					</div>
	
</div>
<?php } ?>
<style>
	#del_home {
		background-color:red;
		border: none;
		color: white;
		padding: 0.5em;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin-left: 37%;
		cursor: pointer;
	}
</style>
</html>