<?php
    class IMC{
        public function calcularIMC($peso, $altura){
            $imc = $peso / ($altura * $altura);
            $mensaje;
            if($imc < 18.5){
                $mensaje = "Usted se encuentra por debajo de su peso";
            }else if($imc >= 18.5 && $imc <= 24.9){
                $mensaje = "Ustes se encuentra en su peso";
            }else if($imc >= 25 && $imc <= 29.9){
                $mensaje = "Usted se encuentra arriba de su peso";
            }else{
                $mensaje = "Usted se encuentra con obesidad :)";
            }
            return $mensaje;
        }
    }
?>