<?php

function router()
{
    echo "2. CBF está analisando os convocados.<br>";
    $rota = "/jogadores";
    $parametro = "id=12345";
    middleware($rota);
}
