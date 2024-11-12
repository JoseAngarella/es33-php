<?php
    session_start();
    if(!isset($_SESSION['registrazioni'])){
        $_SESSION['registrazioni']=array();
    }
    if(!isset($_GET['eta']) || !isset($_GET['codice_fiscale'])){
        header("Location:form.html");
    }
    $_SESSION['registrazioni'][$_GET['codice_fiscale']]=$_GET['eta'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.html">torna al from</a>
    <br>
    <a href="risultati.php">vai a risultati</a>

</body>
</html>

<!-- Una volta arrivati in questa pagina, recuperare i dati della form e fare in modo di tenere traccia di tutti gli inserimenti
  effettuati usando una variabile di sessione $_SESSION["registrazioni"].
Per fare ciò usare un array associativo dove ogni chiave sarà il codice fiscale inserito ed ogni valore sarà l'età che corrisponde 
a quel codice fiscale.
Quindi ad esempio, all'interno della stessa sessione, dopo vari inserimenti fatti tramite la pagina form.html, nella variabile 
$_SESSION["registrazioni"] ci sarà il seguente array associativo:
- $persona["cf1"] = 20
- $persona["cf2"] = 18
- $persona["cf3"] = 10

Comportamento della pagina script.php:
- se la variabile $_SESSION["registrazioni"] non è mai stata settata, inizializzare l'array
- se già è settata, recuperare l'array associativo contenente tutti gli inserimenti effettuati in precedenza e aggiungere un nuovo 
elemento.

In questa pagina ci deve essere un link alla pagina form.html per un nuovo inserimento.
Ci deve essere un link alla pagina risultati.php per vedere il contenuto di $_SESSION["registrazioni"] che viene visualizzato 
attraverso una tabella html.
Inoltre, sempre nella pagina risultati.php, creare un paragrafo il cui testo contiene l'età media di tutti gli inserimento. -->