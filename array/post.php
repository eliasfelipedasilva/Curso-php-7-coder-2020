<div class="titulo">$_POST</div>


<form action="#" method="post">
    <input type="text" name="nome" id="nome">
    <input type="text" name="sobrenome" id="sobrenome">
    <select name="estado" id="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>


</form>

<style>

form > * {
    margin-top:10px;
    padding:25px;
    font-size:1.8rem;
}
</style>

<?php
print_r($_GET);
echo '<br>';
print_r($_POST);



?>


