<div class="titulo">Desafio For</div>
<!-- 
#
##
###
####
#####
 -->
<?php 

$matrix = [
    '#' , '##', '###', '####', '#####'
];
for ($i=0; $i <count($matrix) ; $i++) { 
    echo "{$matrix[$i]}<br>";
}

?>