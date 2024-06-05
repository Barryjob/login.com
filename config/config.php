<?php

    $thename='Afootech Application'; 
    $page = basename($_SERVER['SCRIPT_NAME']);
    $website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $ip_address=$_SERVER['REMOTE_ADDR']; //ip used
    $sysname=gethostname();//computer used
    /////////////////////////////////////////////////////////////////

  
    $website_url='http://localhost/login.com';
    //$website_url='http://192.168.192.162/login.com';


?>


<script>
    var website_url='http://localhost/login.com';
</script>