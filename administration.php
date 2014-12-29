
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>


<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta http-equiv="Content-Language" content="fr" />
 <meta name="author" content="Loher" />
 
<link rel="stylesheet" href="main.css" />

 
 <title>Skate In Lorient</title>
 <?php
 	include 'database.php';
 ?>

</head>

<body>

<table class="tableContainer">
	<tr>
		<td>
			<img src="img/logoSila.png" class="logoSila" alt="SILA" />
		</td>
		<td>
			<h1>Skate In Lorient</h1>
		</td>
		<td>
			<img src="img/logoEsf.png" class="logoEsf" alt="SILA" />
		</td>
	</tr>
</table>

	
 	<?php
 		if(isset($_POST['login']) AND isset($_POST['password'])){

 			$login = $_POST['login'];
 			$password = $_POST['password'];

 			$response = $db->prepare('select * from users where login = ?');
 			$response->execute(array($login));
 			$user = $response->fetch();
 			
 			if($user['login'] != '' AND $user['password'] != '' AND $user['login'] == $login AND $user['password'] == $password){
 				
 			?>
 			
 			<div class="adminContainer">
 			
 			<h2>Administratif</h2>
 			<a href="docs/administratif/statusAssoV3.pdf">Télécharger les status</a>
 			<p><strong>N° Siret : </strong>79334966300013</p>
 			<p><strong>Identification R.N.A : </strong>W561000380</p>
 			<a href="http://www.journal-officiel.gouv.fr/association/index.php?ACTION=Rechercher&HI_PAGE=1&HI_COMPTEUR=0&original_method=get&WHAT=skate+in+lorient+assos&JTH_ID=&JAN_BD_CP=&JRE_ID=&JAN_LIEU_DECL=&JTY_ID=&JTY_WALDEC=&JTY_SIREN=&JPA_D_D=&JPA_D_F=&rechercher.x=0&rechercher.y=0&rechercher=Rechercher">Parution au journal officiel des associations</a>
 			<hr/>
 			<br/>
 			
 			<h2>Contests</h2>
 			<p><a href="docs/contest/demandeManifestation.odt">Télécharger un courrier de demande de manifestation</a></p>
 			<p><a href="docs/contest/demandeMateriel.odt">Télécharger un courrier de demande de materiel</a></p>
 			<p><a href="docs/contest/dechargeContest.odt">Télécharger une décharge pour les participants -16 ans</a></p>
 			<p><a href="docs/contest/planContest.pdf">Télécharger un plan du skatepark</a></p>
 			<hr/>
 			<br/>
 			
 			<h2>Banque (crédit agricole du Morbihan)</h2>
 			<a href="https://www.morbihan-g3-enligne.credit-agricole.fr/stb/entreeBam">Accéder au site web du crédit agricole</a>
 			<p><strong>N° compte : </strong>00034617396<p>	
 			<p><strong>Mot de passe : </strong>231323</p>
 			<a href="docs/banque/rib.png">Télécharger un RIB</a>
 			<hr/>
 			<br/>
 			
 			<h2>Assurance (maïf)</h2>
 			<a href="http://www.maif.fr/accueil.html">Accéder au site web de la maïf</a>
 			<p><strong>N° sociétaire : </strong>3444976A<p>	
 			<p><strong>Mot de passe : </strong>6627</p>
 			<a href="docs/assurance/attestationAssurance.pdf">Télécharger une attestation d'assurance</a>
 			<hr/>
 			<br/>
 			
 			<h2>Contacts</h2>
 			<p><strong>Sébastien Le Devehat : </strong><p>	
 			<p>sledevehat@mairie-lorient.fr</p>
 			<p>02 97 02 22 63</p>
 			<br/>
 			<p><strong>Dominique Jacob : </strong></p>
 			<p>dominique-jacob@ville-lanester.fr</p>
 			<p>02 97 76 81 31</p>
 			<p>06 13 36 56 39 (n° perso)</p>
 			<hr/>
 			<br/>
 			
 			</div>
 				
 				
 			<?php	
 				
 			}
 			else{
 				echo '<p style="color=#000000; margin-left: 30px; font-family: Regular">Mot de passe incorrect</p>';
 			}
 			
 			
 		}
 		else{
 			echo '<p style="color=#000000; margin-left: 30px; font-family: Regular">Erreur dans votre login ou mot de passe</p>';	
 		}
 	?>

</body>

</html>