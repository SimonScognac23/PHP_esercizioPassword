<?

//REGOLE PER IMPOSTARE LA PASSWORD
// 1. Password sia lunga almeno 8 caratteri
// 2. La password contenga almeno 1 numero
// 3. La password contenga almeno un carattere maiuscolo
// 4. La password contenga almeno un carattere speciale



$password = readline('Inserisci qui la password: ');   // readline è una built-function di php che mi permette di accettare in input una strnga dall'utente e come parametro gli passo un prompt

echo "Password inserita: " . $password . "\n";  // Concatenazione 




//1.

//    var_dump(count($password));   ==>  non possiamo usare il count

 //if(strlen($password) >= 8){   // strlen Con questa funzione riesco a determinare la lunghezza della stringa e ci applico un controllo caratteri usando if

  //  echo "La password è lunga almeno 8 caratteri";

// }
////else {

   // echo "La password deve essere lunga di 8 caratteri";

//}











//2.

//echo $password[2];  // Se inserisco 2 e ad esempio io come password scrivo ciao mi stampa "a" che sta alla posizione 2
// Le stringhe in php non sono come array ma hanno questa annotazione speciale, solo le stringhe! 

// for ($i=0; $i < strlen($password); $i++ ){     // Girami finche non hai finito tutti i caratteri di $password

// if(is_numeric($password[$i])){     // mettendo questo controllo di volta in volta is_numeric controlla ogni singolo carattere 0,1,2....e controllava se è un numerico 

 //    echo "La tua password contiene un numero";
  //   break; // Interrompi non appena trovi il primo carattere usando il break
// }


//  }









// 3.

//for ($i=0; $i < strlen($password); $i++) {  

   // if (ctype_upper($password[$i])){  // Controllo di quando incontri il primo carattere maiuscolo rompi il ciclo usando break

   //     echo "La password contiene una maiuscola";
   //     break;
  //  }
// }












// 4.

//$special_chars = ["!" , "@" , "#" , "$"]; // Array di caratteri speciali

//  for ($i=0; $i < strlen($password);  $i++) { 
    
  //  if(in_array($password[$i], $special_chars)){        // Facciamo un controllo sui singoli caratteri che controllano la password
//   echo "La password contiene un carattere speciale";
//    break;

 //   }
//  }

//oppure si puo fare anche cosi...

//     foreach ($special_chars as $char) {
//    if($char == $password[$i]){   // per ogni carattere che compone la mia password io ti chiedo di controllare tutti i caratteri all interno del mio array e se incontri un carattere che è == al carattere della mia password che ho preso in questo momento fai qualcosa....


 //   }
//}






// 1.
function checkLenght($password){     // Tu accetterai un valore che è $password

    if(strlen($password) >= 8){   // strlen Con questa funzione riesco a determinare la lunghezza della stringa e ci applico un controllo caratteri usando if

    echo "La password è lunga almeno 8 caratteri \n";

    return true; //Se è >0 ritornami un valore ossia true

 }
else {

    echo "La password deve essere lunga di 8 caratteri \n";

    return false;

   }

}







// 2.
function checkNumber($password){

     for ($i=0; $i < strlen($password); $i++ ){     // Girami finche non hai finito tutti i caratteri di $password

 if(is_numeric($password[$i])){     // mettendo questo controllo di volta in volta is_numeric controlla ogni singolo carattere 0,1,2....e controllava se è un numerico 

    echo "La tua password contiene un numero \n";
  // break; // Interrompi non appena trovi il primo carattere usando il break
  return true;  // mi ritorna un numero quando incontra almeno un parametro che è un numero
 }


  }

}





// 3.
function checkUppercase($password){

    for ($i=0; $i < strlen($password); $i++) {  

    if (ctype_upper($password[$i])){  // Controllo di quando incontri il primo carattere maiuscolo rompi il ciclo usando break

       echo "La password contiene una maiuscola \n";
     return true;
   }
 }

}




// 4.
const SPECIAL_CHARS = ["!" , "@" , "#" , "$"]; // Array di caratteri speciali

function checkSpecialChar($password){

 for ($i=0; $i < strlen($password);  $i++) { 
    
    if(in_array($password[$i], SPECIAL_CHARS)){   // Facciamo un controllo sui singoli caratteri che controllano la password

 echo "La password contiene un carattere speciale \n";
    return true;

   }
 }
}


function checkPassword($password){


    $first_rule = checkLenght($password);          // Creo 4 variabili che accettano il risultato delle mie fnzioni  
    // first_rule assumera un valore true o false

    $second_rule = checkNumber($password);

    $third_rule = checkUppercase($password);

    $fouth_rule = checkSpecialChar($password);

    if ($first_rule && $second_rule && $third_rule && $fouth_rule){

        echo "Password valida \n";
    }


}


checkPassword($password);



?>
