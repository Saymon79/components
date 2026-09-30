<?php

function dispatcher($rota){
    echo "5. Seleção preparada para os jogos.<br>";
    if ($rota === "/jogador") {
        usuarioController();
    }  else {
        echo"TROCA A BOSTA DA ROTA SEU BURRO";
        }
}