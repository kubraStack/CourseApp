<?php 

 //username ve auth[name] çerezlerini bir günlüğüne boşa almış olduk oturum kapatılmış oldu.
 //Çerezin geçerlilik süresi bittikten sonra tarayıcı tarafından otomatik silinecek.
    setcookie("username", "", time() + (60*60*24));
    setcookie("auth[name]", "", time() + (60*60*24));
    header("Location: login.php");

?>