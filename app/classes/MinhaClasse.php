<?php

namespace App\classes;

class MinhaClasse
{

   //criar um código aleatório(senha)
   public static function criarCodigo()
   {
       $valor = '';
       $caracteres = 'abcdefghijklmnopqrstuvxzwy_ABCDEFGHIJKLMNOPQRSTUVXZWY1234567890!@#$%';
       for($m = 0; $m<10; $m++){
          $index = rand(0, strlen($caracteres));
          $valor .= substr($caracteres, $index, 1);
       }

       return $valor;
   }
}
