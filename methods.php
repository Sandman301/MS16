<?php
print_r($_GET);
echo "<br>";
print_r($_POST);
echo "<br>";
?>


<!doctype html>
    <html>
        <head>
        </head>
        
        <body>
            <h2>GET meetod</h2>
            <form action="" method="get"> 
            <ul>
                <li>
                <label for="nimi">Nimi</label>
                <input type="text" name="Nimi">
                </li>
                <li>
                <label for="perenimi">Perenimi</label>
                <input type="text" name="Perenimi">
                </li>
                <li>
                <input type="submit" name="submit" value="Sisesta">
                </li>
            </ul>
                <?php if (isset ($_GET ['Nimi'])){
                
                foreach ($_GET as $key => $value){echo $key." on ". $value."<br>";}
                } else {echo "Midagi ei ole veel sisestatud <br>";}?>
            </form>
            <h2>POST meetod</h2>
            <form action="" method="post"> 
            <ul>
                <li>
                <label for="nimi">Nimi</label>
                <input type="text" name="Nimi">
                </li>
                <li>
                <label for="perenimi">Perenimi</label>
                <input type="text" name="Perenimi">
                </li>
                <li>
                <input type="submit" name="Sisesta">
                </li>
            </ul>
                <?php if (isset ($_POST ['Nimi'])){
                
                foreach ($_POST as $key => $value){echo $key." on ". $value."<br>";}
                } else {echo "Midagi ei ole veel sisestatud <br>";}?>
            </form>
            
            
            
            
        </body>
    
    
    </html>