<div class="titulo">String PHP</div>
<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação

echo "Nós também" . ' somos'.'<br>';
echo "Númro é" . 123;
echo '<br>', "Também aceito", "virgulas", '<br>';


echo "'teste'" . '"teste"'.'\'teste\''. "\"teste\""."\\", '<br>';

print("<br>Também existe a função print");
print"<br>Também existe a função print";

// Algumas funções de string

echo '<br>'. strtoupper('maximizado');
echo '<br>'. strtolower('MINIMIZADO');
echo '<br>'. ucfirst('só a primeira letra');
echo '<br>'. ucwords('todas as palavras');
echo '<br>'. strlen('Quantas Letras?');
echo '<br>'. mb_strlen("Eu também", "utf-8");
echo '<br>'. substr('Só uma parte mesmo', 7,6);
echo '<br>'. str_replace('isso','aquilo','Trocar isso isso');





