<?php
echo "test";
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'schmetterlinge';
  $db_port = 8889;

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;
  $vname = htmlspecialchars($_POST["vname"]) ;
  $nname = htmlspecialchars($_POST["nname"]) ;
  $email = htmlspecialchars($_POST["email"]) ;
  $nameschmetterling = htmlspecialchars($_POST["nameschmetterling"]) ;
  $beschrschmetterling = htmlspecialchars($_POST["beschrschmetterling"]) ;
  $locationschmetterling = htmlspecialchars($_POST["locationschmetterling"]) ;

  $sql = "INSERT INTO `posts` (`Id`, `Vorname`, `Nachname`, `EMail`, `SName`, `SBeschreibung`, `SOrt`) VALUES (NULL, '". $vname."', '".$nname."', '".$email."', '".$nameschmetterling."', '".$beschrschmetterling."', '".$locationschmetterling."')"; 
  if ($mysqli->query($sql) === TRUE) { echo "New record created successfully";} 
  else {  echo "Error: " . $sql . "<br>" . $mysqli->error;} 
  

  $mysqli->close();
?>
