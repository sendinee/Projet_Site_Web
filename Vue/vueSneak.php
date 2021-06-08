<?php
	
	echo "<div class='cards'>";

	foreach ($results as $unResultat) {
		echo "<div class='card'>
					<img src=".$unResultat['url'].">
				<div class='card-header'>
					<h4 class='title'>".$unResultat['nom_Sneaker']."</h4>
					<h4 class='price'>".$unResultat['prix']." €</h4>
				</div>
				<div class='card-body'><p>".$unResultat['modele']."<br>".$unResultat['nom_Marque']."<hr/><i class='fas fa-shopping-cart'></i></p>
				</div>
		 		
			  </div>";
	}

	echo "</div>";
	?>