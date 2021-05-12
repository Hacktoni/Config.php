<?php ?>
<?php
    extract($_REQUEST);
    $file=fopen("singupCo.txt","a");
    fwrite($file,"id :");
    fwrite($file, $id ."\n");
    fwrite($file,"imePrezime :");
    fwrite($file, $imePrezime ."\n");
    fwrite($file,"email :");
    fwrite($file, $email ."\n");
    fwrite($file,"šifra :");
    fwrite($file, $šifra ."\n");
    fwrite($file,"{______________________________________________________________________________________________________________________}");
    fclose($file);
    header("location: index.php");
    ?>