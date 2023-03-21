<?php
//Funzione per generare una password
function generatePassword($lengthPassword) {
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?%$"; //lista di caratteri
    $charactersLength = strlen($characters) - 1; //lunghezza della lista di caratteri
    $password = ""; //password
    //Ciclo
    for ($i = 0; $i < $lengthPassword; $i++) {
        $character = rand(0, $charactersLength); //prendo un carattere casuale dalla lista di caratteri
        $password .= $characters[$character]; //inserisco il carattere nella password
    }
    return $password; //restituisco la password
}
?>