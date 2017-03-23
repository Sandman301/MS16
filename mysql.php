<?php

// defineerime ühendus muutjuad
$server = "localhost";
$user = "root";
$pass = "";

// loome ühenduse

$conn = new mysqli($server, $user, $pass);

function connect(){   
// kontrollime ühenduse olemasolu
if (!$conn){

    die("Ühendust ei ole ". msqli_connect_error());
}
    echo "Jess! Kontakteerusin";
}
    


//pärime andmebaasist andmeid (Kõik korraga)

function my_query($conn){
$sql = "SELECT id, name, id_code FROM ms16.isik";
$result = $conn -> query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: ".$row["id"]." Nimi: ".$row["name"]." ja isikukood ".$row["id_code"];
}

} else {echo "Sul on tühi baas, tee midagi!";}

}

function my_insert($conn){
    
    $sql = 'INSERT INTO ms16.isik (name, id_code) VALUES ("Peeter","37501014321")';
    $result= $conn->query($sql);
}
function my_delete($conn){
    $sql = 'DELETE FROM ms16.isik (name, id_code) VALUES ("Peeter","37501014321")';
    $result= $conn->query($sql);
}


function my_close($conn){

$conn->close();
}
//pärime andmebaasist andmeid (Ühekaupa)

//lisame andmebaasi andmeid 


?>