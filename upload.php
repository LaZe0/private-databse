<?php
$target_dir = "Immagini/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
  echo "Il file è già presente nella cartella 'Immagini/'";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Ci scusiamo, il file non è stato caricato";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Il file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " è stato caricato.";
  } else {
    echo "Ci scusiamo ma c'è stato un errore sconosciuto durante il completamento dell'azione richiesta.";
  }
}
?>
