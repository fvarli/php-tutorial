<?php

    //$_FILES

   if($_FILES['dosya']['error'] == 4){
       echo "Lütfen dosya yükleyiniz.";
   }else{
       print_r($_FILES['dosya']);
   }