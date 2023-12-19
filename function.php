<?php 
//$letter = $_GET['lettere'] ?? "null";
//$number = $_GET['numeri'] ?? "null";
//$special = $_GET['speciali'] ?? "null";
?>
    <?php  
    function rndPsw($lenght){
        $password = [];
        if (isset($_GET['letter'])) {
            $sololettere = "a b c d e f g h i j k l m n o p q r s t u v w x y z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z";
            $lettereINarray = explode(" " , "$sololettere");
            for ($i=0; $i<$lenght; $i++){
               $indexL = array_rand($lettereINarray);
               $password[] = $indexL;
           }
        }else{
            $caratteri = "a b c d e f g h i j k l m n o p q r s t u v w x y z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z 1 2 3 4 5 6 7 8 9 0 ! $ & ?";
            $caratteriINarray = explode(" " , "$caratteri");
            for ($i=0; $i<$lenght; $i++){
                $index = /*random_int(0 , 9);*/ array_rand(array_flip($caratteriINarray));
                $password[] = $index;
                // $rand_keys = array_rand($caratteri);
                // $password[] = $caratteri[$rand_keys];
            }
        }
        return implode($password);
    }
 ?>   
    