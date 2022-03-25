<?php
    if(!isset($_COOKIE['theme']))
    {
        header("LOCATION:index.php");
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if($_COOKIE['theme']=="1")
        {
            echo '<link rel="stylesheet" href="style.css">';
        }elseif($_COOKIE['theme']=="2")
        {
            echo '<link rel="stylesheet" href="style2.css">';
        }else{
            echo '<link rel="stylesheet" href="style3.css">';
        }  
    ?>
   
</head>
<body>
    <header>
        <div class="container">
            <h1>Ex Cookie Thème</h1>
        </div>
    </header>
    <section>
        <div class="container">
                <form action="treatmentChange.php" method="POST">
                    <div class="form-group">
                        <label for="theme">Thème: </label>
                        <select name="theme" id="theme">
                            <?php
                                if($_COOKIE['theme']=="1")
                                {
                                    echo ' <option value="2">Style 1</option>';
                                    echo '<option value="3">Style 2</option>';
                                    echo '<option value="1" selected>Style d\'origine</option>';
                                }elseif($_COOKIE['theme']=="2")
                                {
                                    echo ' <option value="2" selected>Style 1</option>';
                                    echo '<option value="3">Style 2</option>';
                                    echo '<option value="1">Style d\'origine</option>';
                                }else{
                                    echo ' <option value="2">Style 1</option>';
                                    echo '<option value="3" selected>Style 2</option>';
                                    echo '<option value="1">Style d\'origine</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
        </div>
    </section>
    <footer>
        <div class="copy">
            &copy;Copyright 2022 - Web Dev   
        </div>
    </footer>
</body>
</html>