<?php 
$letter =  (isset($_GET["letter"]) ? true : false);     
$number = (isset($_GET["number"]) ? $_GET["letter"] : false);
$special = (isset($_GET["special"]) ? $_GET["letter"] : false);
$arrayPassword = [];
if($letter){
    $sololettere = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    // $lettereINarray = explode(" " , "$sololettere");
    $arrayPassword = array_marge($arrayPassword,$lettereINarray);
}
// if($number){
//     $soloNumeri = "1 2 3 4 5 6 7 8 9 0";
//     $numeriINarray = explode(" " , "$soloNumeri");
//     $arrayPassword = array_marge($arrayPassword, $numeriINarray);
// }
// if($special){
//     $solocaratteri = "! | \ & / ( ) = ? ^ * + { } [ ] # _ -";
//     $caratteriINarray = explode(" " , "$solocaratteri");
//     $arrayPassword = array_marge($arrayPassword , $caratteriINarray);
// }
    function rndPsw($lenght,$arrayPassword){
        $password = "";
        for ($i=0; $i<$lenght; $i++){
            $index = array_rand($arrayPassword);
            $password .= $index;
        };
        return $password;
    }
 ?>   
    