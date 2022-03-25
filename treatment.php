<?php
    if(isset($_POST['nom']))
    {
        $err=0;
        if(empty($_POST['nom']))
        {
            $err=1;
        }else{
            $nom = htmlspecialchars($_POST['nom']);
        }

        if(empty($_POST['theme']))
        {
            $err=2;
        }else{
            $theme = htmlspecialchars($_POST['theme']);
            $themes = ["1","2","3"];
            if(!in_array($theme,$themes))
            {
                $err=3;
            }
        }

        if($err==0)
        {
            setcookie("nom",$nom,time()+(360*24*3600),null,null,false,true);
            setcookie("theme",$theme,time()+(360*24*3600),null,null,false,true);
            header("LOCATION:index.php");
        }else{
            header("LOCATION:index.php?error=".$err);
        }


    }else{
        header("LOCATION:index.php");
    }


