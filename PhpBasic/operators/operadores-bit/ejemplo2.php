
<?php
echo 12 ^ 9; // Sale '5'
echo "\n";
echo "12" ^ "9"; // Sale el caracter de retroceso (ascii 8)
                 // ('1' (ascii 49)) ^ ('9' (ascii 57)) = #8
echo "\n";
echo "a" ^ "e"; // Salen los valores ascii #0 #4 #0 #0 #0
echo "\n";                        // 'a' ^ 'e' = #4

echo 2 ^ "3"; // Sale 1
              // 2 ^ ((int)"3") == 1
echo "\n";
echo "2" ^ 3; // Sale 1
              // ((int)"2") ^ 3 == 1
?>
