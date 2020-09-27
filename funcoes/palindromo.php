<div class="titulo">Desafio Palindromo</div>




<?php 
// PHP code to check for Palindrome string in PHP 
// Using strrev() 
// function Palindrome($string){   
//     if (strrev($string) == $string){   
//         return 1;   
//     } 
//     else{ 
//         return 0; 
//     } 
// }   
  
// Driver Code 
// $original = "dracula";  
// if(Palindrome($original)){   
//     echo "A Palavra '$original' é um Palindromo";   
// }  
// else {   
// echo "A Palavra '$original' , não é um Palindromo";   
// } 
// function palindromo($palavra) {
//     $ultimoIndice = strlen($palavra) - 1;
//     for ($i=0; $i <= $ultimoIndice ; $i++) { 
//         # code...
//         if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
//             return 'Não é um Palindromo!';
//         }
//     }
//     return 'Sim é um Palindromo';
// }

// echo palindromo('arara').'<br>';
// echo palindromo('bola').'<br>';
// echo palindromo('cabelo').'<br>';
// echo palindromo('ana').'<br>';
// echo palindromo('ama').'<br>';


function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim é um Palindromo!!' : 'Não é um palindromo!';

}
echo palindromoSimples('arara').'<br>';
echo palindromoSimples('bola').'<br>';
echo palindromoSimples('cabelo').'<br>';
echo palindromoSimples('ana').'<br>';
echo palindromoSimples('ama').'<br>';

?> 
