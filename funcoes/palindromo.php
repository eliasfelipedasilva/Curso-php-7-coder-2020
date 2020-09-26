<div class="titulo">Desafio Palindromo</div>




<?php 
// PHP code to check for Palindrome string in PHP 
// Using strrev() 
function Palindrome($string){   
    if (strrev($string) == $string){   
        return 1;   
    } 
    else{ 
        return 0; 
    } 
}   
  
// Driver Code 
$original = "mateus";  
if(Palindrome($original)){   
    echo "A Palavra '$original' é um Palindromo";   
}  
else {   
echo "A Palavra '$original' , não é um Palindromo";   
} 
?> 
