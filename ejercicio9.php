<?php
    /**
    * @author: Ángel Cubero Olivares
    * @since: 27/09/2023
    */

    $string = "Harry"; 
    $double = 25.5;
    $booleano = true;
    $entero = 7;
    $null = null;
    
    function tipo($variable) {
        if (is_string($variable)) {
            return "Valor es string.";
        } elseif (is_float($variable)) {
            return "Valor es double.";
        } elseif (is_bool($variable)) {
            return "Valor es boolean.";
        } elseif (is_int($variable)) {
            return "Valor es integer.";
        } elseif (is_null($variable)) {
            return "Valor es NULL.";
        } else {
            return "Tipo de dato desconocido.";
        }
    }
    
    echo tipo($string)."<br>";

    echo tipo($double)."<br>";

    echo tipo($booleano)."<br>";

    echo tipo($entero)."<br>";

    echo tipo($null)."<br>";


    echo '<br><a href="https://github.com/SrPola/DWES-UD2-Angel_Cubero.git">Repositorio</a>';

?>