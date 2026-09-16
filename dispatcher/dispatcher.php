<?php

function dispatcher($rota)
{
    echo "5. Dispatcher decidiu qual copntroller deve executar.<br>";
    if ($rota === "/usuarios") {
        usuarioControler();
    }
}
