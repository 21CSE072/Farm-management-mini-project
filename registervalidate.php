<?php
    $userid=$_POST['u'];
    $password=$_POST['p'];
    $name=$_POST['n'];
    $address=$_POST['ad'];
    $country=$_POST['country'];
    $zip=$_POST['zip'];
    $mail=$_POST['eid'];

    if(strlen($userid)>=5 && strlen($userid)<=7){
        if(strlen($password)>=7 && strlen($password)<=12){
            if(preg_match("/^[a-zA-Z-']*$/",$name)){
                if(ctype_alnum($address)){
                    if($country!=="please select a country"){
                        if(ctype_alnum($zip)){
                            if(preg_match("/^([a-z A-Z 0-9 @+.-]+)(@[a-z A-Z 0-9 @+.-]+)(\.[a-zA-Z0-9])*$/",$mail)){
                                    echo '<script>alert("REGISTERED SUCCESSFULLY");</script>';
                            }
                            else{
                                echo '<script>alert("entered emailid is invalid");</script>';
                            }
                        }
                        else{
                            echo '<script>alert("entered zip code is invalid");</script>';
                        }
                    }
                    else{
                        echo '<script>alert("select a country");</script>';
                    }
                }
                else{
                    echo '<script>alert("entered address is invalid");</script>';
                }
            }
            else{
            echo '<script>alert("entered name is invalid");</script>';}
        }
        else{
            echo '<script>alert("entered password is invalid");</script>';
        }
    }
    else{
        echo '<script>alert("entered userid is invalid");</script>';
    }
?>