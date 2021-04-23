<?php
function enkripsi()  {
      $plaintext = 'kanzu123tesTES42';  
      //Encode plaintext  
      $encode = base64_encode($plaintext);  
      //Decode plaintext  
      $decode = base64_decode($encode);  
      echo "Plaintext = ".$plaintext."<br/>";   
      echo "Hasil enkripsi = ".$encode."<br/>";  
      echo "Hasil dekripsi = ".$decode;  
}

enkripsi();
?> 