<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if(isset($_COOKIE['theme']))
        {
            if($_COOKIE['theme']=="1")
            {
                echo '<link rel="stylesheet" href="style.css">';
            }elseif($_COOKIE['theme']=="2")
            {
                echo '<link rel="stylesheet" href="style2.css">';
            }else{
                echo '<link rel="stylesheet" href="style3.css">';
            }
        }else{
            echo '<link rel="stylesheet" href="style.css">';
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
            <?php
                if(isset($_COOKIE['nom'])):
            ?>
                <div class="info">Hello <?= $_COOKIE['nom'] ?>!</div>
                <div class="link"><a href="changetheme.php">Vous voulez changer de thème?</a></div>
            <?php
                else:
            ?>
                <form action="treatment.php" method="POST">
                    <div class="form-group">
                        <label for="nom">Nom: </label>
                        <input type="text" name="nom" id="nom">
                    </div>
                    <div class="form-group">
                        <label for="theme">Thème: </label>
                        <select name="theme" id="theme">
                            <option value="2">Style 1</option>
                            <option value="3">Style 2</option>
                            <option value="1">Style d'origine</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            <?php
                endif;
            ?>
        </div>
    </section>
    <footer>
        <div class="copy">
            &copy;Copyright 2022 - Web Dev   
        </div>
    </footer>
</body>
</html>