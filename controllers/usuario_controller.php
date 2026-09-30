<?php
  function usuarioController(){
     echo "6. Brasil tem time pronto para jogo.<br>";
    $jogadores = usuarioService();
echo "8. Brasil vence por 67 x 42.<br>";
    echo "Craques da bola escalados:<br>";
foreach ($jogadores as $jogadores) {
          echo "-". $jogadores . "<br>";
      }

}