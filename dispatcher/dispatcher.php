<?php

function dispatcher($rota){
    echo "5. Dispatcher decidiu qual controller deve executar.<br>";
    if ($rota === "/usuários") {
        usuarioController();
    }  else {
        echo"Troca de rota imbecil acefalo";
        }
}