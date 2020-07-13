<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e
sostituire la badword passata in GET con tre *.  -->

<?php

  $paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla lorem pariatur.
   lorem sint occaecat lorem non proident, sunt in culpa qui lorem";

  $lenghtp = strlen($paragrafo);  // strlen è la funzione che restituisce la lunghezza della stringa
  $ban = $_GET["ban"];
  $paragrafocorretto = str_replace($ban, "***", $paragrafo);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?php echo $paragrafocorretto?></p>
    <p><?php echo " la lunghezza è di: " . $lenghtp . " parole"?></p>
  </body>
</html>
