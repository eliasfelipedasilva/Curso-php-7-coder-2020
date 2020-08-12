<div class="titulo">If Else</div>
<?php
if(false){
    echo "Serei impresso?<br>";
}

if(true)
    echo "Verdadeiro<br>";
else
    echo "falso<br>";
    


if(false){
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}




if(false) {
    echo "Passo A<br>";
} else if(false) {
    echo "Passo B<br>";
} else if(false) {
    echo "Passo C<br>";
} else if(true) {
    echo "Passo D<br>";
} else if(true) { //enquanto o passo D for verdadeiro ele nunca vai passar para o proximo passo
    echo "Passo E<br>";
} else {
    echo "Último Passo<br>";
}

echo "fim<br>";    
?>