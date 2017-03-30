<?php
include 'menu.php';
include 'mysql.php';
?>

<!doctype html>
<html>
    <head>
    </head>
    <body>
        <h2>POST meetod</h2>
        <form action='' method='post'>
        <ul>
            <li><?php show_button($conn); ?></li>
            <li><?php add_button($conn); ?></li>
            <li>
                
                <br>
                <label for="Nimi">Nimi</label>
                <input type="text" name="Nimi" required>
                
                <label for="Perenimi">Perenimi</label>
                <input type="text" name="Perenimi">
                
                <label for="Isikukood">Isikukood</label>
                <input type="text" name="Isikukood" required>
            </li>
            
            <li><?php delete_button($conn); ?></li>
            <li>
                <label for="PARAM">Veerg</label>
                <input type="text" name="PARAM">
                <label for="ID">Sisesta ID</label>
                <input type="text" name="ID">
            </li>
        </ul>
        </form>
        
        <h2>GET meetod</h2>
        <form action='' method='get'>
        <ul>
            <li><?php search_by_button($conn); ?></li>
            <li>
                <label for="PARAM">Veerg</label>
                <input type="text" name="PARAM">
            </li>
            <li>
                <label for="ID">Väärtus</label>
                <input type="text" name="ID">
            </li>
            
        </ul>
        </form>
    </body>
</html>