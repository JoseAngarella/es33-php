<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(!isset($_SESSION['registrazioni'])){
          header("Location:form.html");
        }else{
            $sommaeta=0;
            $registrazioni=0;
            $stampa="<table><tr><th>codice fiscale</th><th>eta</th></tr>";
            foreach($_SESSION['registrazioni'] as $codice_fiscale => $eta){
                $stampa.="<tr><td>$codice_fiscale</td><td>$eta</td></tr>";
                $sommaeta+=$eta;
                $registrazioni++;
            }
            $stampa.="</table>";
            $mediaeta=number_format($sommaeta/$registrazioni,2);
            $stampa.="<br><h3>la media delle eta e $mediaeta</h3>";
            echo $stampa;
            
        }
    ?>
    <a href="form.html">torna al form</a>
    <a href="resetta_sessione.php">resetta la sessione</a>

</body>
</html>