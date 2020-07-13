<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e
sostituire la badword passata in GET con tre *.  -->

<?php

  $paragrafo = "ciao sono un paragrafo!";
  $lenghtp = strlen($paragrafo);  // strlen è la funzione che restituisce la lunghezza della stringa
  $ban = $_GET["ban"];
  $paragrafocorretto = str_replace($ban, "xxx", $paragrafo); // replace

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?php echo $paragrafocorretto . " la lunghezza è di: " . $lenghtp . " parole"?></p>
  </body>
</html>
