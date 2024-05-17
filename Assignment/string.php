<?php
//Count vowel in each string in array
//Reverse each string in array
function vowelCountReversedString($strings){
    foreach($strings as $string){
        $count = 0;
        for($i=0;$i<strlen($string);$i++){
            if($string[$i]=='a'||$string[$i]=='e' || $string[$i]=='i' || $string[$i]=='o' || $string[$i]=='u'){
                $count++;
        }
        }
        $reversedString = strrev($string);
        printf("Original String: %s, Vowel Count: %d, Reversed String: %s\n", $string, $count, $reversedString);
    }

}
$strings = ["Hello", "World", "PHP", "Programming"];
vowelCountReversedString($strings);