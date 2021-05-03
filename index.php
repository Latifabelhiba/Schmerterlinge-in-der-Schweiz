<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butterflies</title>


    <link href="style.css" rel="stylesheet">
</head>

<body>

    <header class="header">
        <img class="header__logo" src="icons/butterfly.svg" alt="logo">

        <nav class="header__navigation">

            <ul class="navigation_unsorted-list">
                <li class="navigation_list-item">
                    <a href="index.html" class="navigation_link">Schmetterlinge in der Schweiz</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="banner">

        <br>

        <form  class="form" method="post" action="action.php"> 

            <label for="vname">Vorname:</label><br>
            <input type="text" id="vname" name="vname" value="" required><br><br>
            <label for="nname">Nach name:</label><br>
            <input type="text" id="nname" name="nname" value="" required><br><br>
            <label for="nname">Email:</label><br>
            <input type="text" id="email" name="email" value="" required><br><br>
            <label for="nameschmetterling">Name des Schmetterlings:</label><br>
           
           
            <select name="nameschmetterling" id="nameschmetterling" required>
                <option value="distelfalter">Distelfalter</option>
                <option value="zitronenfalter">Zitronenfalter</option>
                <option value="taubenschwaenzchen">Taubenschwänzchen</option>
                <option value="admiral">Admiral</option>
                <option value="aurorafalter">Aurorafalter</option>
                <option value="tagpfauenauge">Tagpfauenauge</option>
            </select><br><br>
            
        
            <label for="locationschmetterling">Wo hast du den Schmetterling gesichtet:</label><br>
            <input type="text" id="locationschmetterling" name="locationschmetterling" value=""><br><br>
            <label for="beschrschmetterling">Beschreibung des Schmetterlings:</label><br>
            <textarea id="beschrschmetterling" name="beschrschmetterling"></textarea> <br> <br>
            
            <input type="submit" value="Submit">

        </form>

		<div class="banner__text" > Schmeterlige in der Schweiz </div>

    </div>

	<section class="results__wrapper">
		<ul class="results">
<?php
	include "includes/connect.php";

	// SQL zusammenstellen, um die Werte in die Datenbank einzufügen
	$sql = "SELECT * FROM `posts`";

	// SQL ausführen und Fehler abfangen
	$result = $mysqli->query($sql);
		while ($row = $result->fetch_assoc()) {
			?>
			<li class="result">
				<div class="result__image-wrapper">
					<img class="result__image" src="images/select/<?php echo $row["SName"]; ?>.jpg">
				</div>

				<div class="result__info">
					<h3 class="result__name"><?php echo $row["Vorname"] . " " . $row["Nachname"]; ?></h3>

					<ul class="result-meta">
						<li class="result-meta__item">
							<img class="result-meta__icon" src="icons/butterfly.svg">
							<p class="result-meta__name"><?php echo $row["SName"]; ?></p>
						</li>
						<li class="result-meta__item">
							<img class="result-meta__icon" src="icons/map.svg">
							<p class="result-meta__name"><?php echo $row["SOrt"]; ?></p>
						</li>
						<li class="result-meta__item">
							<img class="result-meta__icon" src="icons/star.svg">
							<p class="result-meta__name"><?php echo $row["SBeschreibung"]; ?></p>
						</li>
					</ul>
				</div>
			</li>
			<?php
		}

	// Verbindung schliessen
	$mysqli->close();
?>
		</ul>
	</section>


</body>

</html>