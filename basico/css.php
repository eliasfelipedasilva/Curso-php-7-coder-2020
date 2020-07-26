<div class="titulo">Integração CSS</div>

<h1 center azul>
    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Mundo!';
        echo '</small>';
    ?>
</h1>
<h2 center verde-claro fundo-escuro>Exemplo de String dentro de PHP com tags HTML e CSS embutidos</h2>
<?= "<div center>Outra forma de me 'expressar'!</div>" ?>

<br>
<h2 center azul>Exemplo de botão feito com PHP dentro de tags HTML e CSS embutidos</h2>
<div center><button dobro><?= "UchôaMaster" ?></button></div>

<style>
button {
    background-color:#0c0c;
    color:white;
    padding: 15px;
    font-weight: 700;
    font-size: 1.5rem;
}


button:hover{
    background-color:black;
    color:green;
    cursor:pointer;
    transition: ease-out 0.8s;
    -webkit-transition: ease-out 0.8s;
    -moz-transition: ease-out 0.8s;
    -ms-transition: ease-out 0.8s;
    -o-transition: ease-out 0.8s;
}

[center] {
    display: flex;
    justify-content:center;
}

[verde-claro] {
    color:chartreuse;
}

[fundo-escuro] {

    background-color:darkslategray;
}

[azul] {
    color: #4286f4;
}

[dobro] {

    font-size: 2rem;
}


</style>