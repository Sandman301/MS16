<?php

require 'Function.php';

home();


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
$sql = "SELECT ID, Nimi, Perenimi, Isikukood, Aeg FROM ms16.inimesed";
$result = $conn -> query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: ".$row["ID"].
             " Nimi: ".$row["Nimi"].
             " Perenimi: ".$row["Perenimi"].
             " Isikukood: ".$row["Isikukood"].
             " ja sisestus aeg:".$row["Aeg"]."<br>";
}

} else {echo "Sul on tühi baas, tee midagi!";}

}

function my_insert($conn){
    
    $sql = "INSERT INTO ms16.inimesed (Nime, Perenimi, Isikukood)
    VALUES ('Peeter','Toomas','37501014321')";
    $result= $conn->query($sql);
}
function my_delete($conn){
    $sql = "DELETE FROM ms16.inimesed WHERE name = 'Carlo'";
    $result= $conn->query($sql);
}


function my_close($conn){

$conn->close();
}

function show_button($conn){
    echo "<input type='submit' name='show' value='Näita kõiki'>";
    if(isset($_POST['show'])){ 
        my_query($conn);
    }else { echo "ei õnnestunnud";}
    }


function add_button($conn){
    echo "<input type='submit' name='add' value='Lisa Kirje'>";
    if(isset($_POST['add'])){ 
        my_insert($conn);
    }else { echo "ei õnnestunnud";}
}

function delete_button($conn){
    echo "<input type='submit' name='delete' value='Kustuta Kirje'>";
    if(isset($_POST['delete'])){ 
        my_delete($conn);
    }else { echo "ei õnnestunnud";}
}

//my_query($conn);
//my_insert($conn);
//my_delete($conn);

//pärime andmebaasist andmeid (Ühekaupa)

//lisame andmebaasi andmeid 


?>
<!doctype html>
<html>
    <head>
    </head>
    <body>
        <form action='' method='post'>
        <ul>
            <li><?php show_button($conn); ?></li>
            <li><?php add_button($conn); ?></li>
            <li><?php delete_button($conn); ?></li>
        </ul>
        </form>
    </body>
</html>