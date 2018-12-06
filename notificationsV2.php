<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>
<meta charset="utf-8" />
</head>

<body>

    <?php include("header.php"); ?>
    
    
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=Notifications;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM Notifications');

    ?>
    
    <section>
		<h1>Notifications</h1>
		
		
        	<?php
        while ($donnees = $reponse->fetch()) {
            ?>
            <button class="buttonA">
			<span><?php

            echo $donnees['Provenance'] . ' / ' . $donnees['Objet'] . '  ( ' . $donnees['Date envoi'] . ')<br />
				';
            ?></span>
		</button>
                
			
            <?php
        }
        $reponse->closeCursor();

        ?>
        	
    	

	</section>


</body>

<style>
section {
	border: 1px solid #D52C42;
	margin-left: 900px;
	overflow: auto;
	border-radius: 10px;
}

h1 {
	font-family: "Comfortaa-Bold";
	color: #D52C42;
	text-align: center;
}

.buttonA {
	font-family: "Comfortaa-Regular";
	background-color: #D46372;
	border-radius: 5px;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	color: white;
}

.buttonA:hover {
	background-color: #D52C42;
}

.buttonA span {
	cursor: pointer;
	display: inline-block;
	position: relative;
	transition: 0.5s;
}

.buttonA span:after {
	content: '\00bb';
	position: absolute;
	opacity: 0;
	top: 0;
	right: -10px;
	transition: 0.5s;
}

.buttonA:hover span {
	padding-right: 20px;
}

.buttonA:hover span:after {
	opacity: 1;
	right: 0;
}
</style>