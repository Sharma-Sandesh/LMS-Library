<?php

function trimText($text){

    $text=trim($text);
    $text=stripslashes($text);
    $text=htmlspecialchars($text);

    return $text;

}

function injected($inputTest){

    $injectedWords= array("union","join","select");
    $inputTest = strtolower($inputTest);
    $returnVal = false;

   foreach($injectedWords as $val){

       if(strpos($inputTest,$val) !== false){

           $returnVal = true;
           break;
       }
   }

    return $returnVal;

}



?>
