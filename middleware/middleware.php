<?php

function middleware($rota){
    echo "3. Middleware está verificando a reuisição.<br>";
    $permitido = true;

    if($permitido){
        echo "4. Middleware permitiu continuar.<br>";
        dispatcher($)
    } else {
        echo "5. Middleware bloqueou a requisição.<br>";
        echo "6. Middleware retornou uma resposta de erro.<br>";
    }
} echo "5. Middleware bloqueou a requisição.<br>";
        echo "6. Middleware retornou uma resposta de erro.<br>";