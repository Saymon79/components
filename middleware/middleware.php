<?php

function middleware($rota){
    echo "3. Convocação autorizada pela CBF.<br>";
    $permitido = true;
    
    if ($permitido) {
        echo "4. Seleção sendo preparada para os treinos.<br>";
        dispatcher($rota);
    } else {
        echo "4. SELEÇÃO SEM NÍVEL.<br>";
    }
}