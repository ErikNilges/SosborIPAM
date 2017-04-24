<?php
// Funktion: Aufbau einer Verbindung zum Datenbankenserver,
// Query an die gewählte Datenbank, Ausgabe des Ergebnisdatensatzes.
function dbquery($server, $user, $password, $database, $query){

	// Aufbauen einer Datenbankverbindung.
	$conn = mysqli_connect($server, $user, $password, $database);
	
	// Exception: Verbindung fehlgeschlagen!
	if (mysqli_connect_errno()){
		echo "<p><b>Failed to establish a connection!</b></p>";
		mysqli_close($conn);
		} else {
			// Auswahl der Datenbank erfolgreich, Query starten
			$result = mysqli_query($conn, $query);
					
			// Exception: Der ausgwählte Datensatz ist leer!
			if (empty($result)){
				echo "<p><b>The selection is empty!</b></p>";
				mysqli_close($conn);
				} else {
					mysqli_close($conn);
					return $result;
					}
			
			}					

						
}
?>
