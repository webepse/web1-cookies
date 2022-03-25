<?php
    if(isset($_POST['theme']))
    {
        $err=0;
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
            setcookie("theme",$theme,time()+(360*24*3600),null,null,false,true);
            header("LOCATION:index.php");
        }else{
            header("LOCATION:changetheme.php?error=".$err);
        }


    }else{
        header("LOCATION:index.php");
    }


