<?php

class Calculando {
 

     public function mediaDiaria(){ 
        $mediaDias =  27;
        $hsp = 5.13;
        $resultado  = $mediaDias/$hsp;
        $resultadoFormatado = number_format($resultado, 2, '.', ',');

        echo "Essa é a média de consumo diária: ".$resultadoFormatado." kWp. <br>";

        return $resultadoFormatado;
     }
     public function calculandoFdg() {
        $calculo = $this->mediaDiaria();
        $fdg = 0.75;
        $calculoFdg = ($calculo/$fdg); 
        $FdgFormatado = number_format($calculoFdg, 2, '.', ',') ;
        echo "Resultado com FDG ".$FdgFormatado." kWp<br>";
        return $FdgFormatado;

     }
     public function calculandoModulos(){
        $calculoFdg = $this->calculandoFdg();
        $potencia = 0.4;
        $modulos  = ($calculoFdg/$potencia);


        echo "Essa é a quantidade de modulos: ".ceil($modulos);
        return $modulos;

     }
   }

$resultado = new Calculando();
//$resultado->mediaDiaria();
//$resultado->calculandoFdg();
$resultado->calculandoModulos();