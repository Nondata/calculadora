<?php

use LDAP\Result;

    require "./conexion.php";
    class Calcular{
        public function insertar(){
            $c = new Conexion();
            $con = $c->c();

            $calculo = new Calcular();

            $sueldo = $_POST['saldo'];
            $edad = $_POST['edad'];
            $sexo=$_POST['sexo'];
            $nacionalidad= $_POST['nacionalidad'];
            

            $cursos = [
                $calculo->c_php($_POST['php']),
                $calculo->c_asp($_POST['asp']),
                $calculo->c_vb($_POST['vb']),
                $calculo->c_java($_POST['java']),
                $calculo->c_oracle($_POST['oracle']),
                $calculo->c_bd($_POST['bd'])
            ];


            $query="INSERT INTO materias(sueldo,edad,sexo,nacionalidad,antiguedad,php,asp,vb,java,oracle,bd,bono)
            values('',)";
        }
        function bono_extra($sueldo,$sexo,$edad,$nacionalidad){
            $extra = $sueldo * .15;

            
        }
        function calc_nacional($extra,$nacionalidad){
            if($nacionalidad=="extranjero"){
                $extra -= $extra*0.015;

                return $extra;
            }else{
                return 0;
            }
        }
        function calc_edad($extra,$edad){
            if($edad>45){
                $extra += $extra * 0.02;
            }else{
                return 0;
            }
        }
        function calc_sexo($extra,$sexo){
            if($sexo=="femenino"){
                $extra += $extra *0.3;

                return $extra;
            }else{
                return 0;
            }
        }
        function c_bd($bd){
            if(isset($bd)){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        function c_oracle($oracle){
            if(isset($oracle)){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        function c_java($java){
            if(isset($java)){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        function c_vb($vb){
            if(isset($vb)){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        function c_php($php){
            if(isset($php)){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        function c_asp($asp){
            if(isset($asp)){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        function mostrar_datos(){
            $c = new Conexion();
            $con = $c->c();

            $query="SELECT * FROM materias";
            $result=mysqli_query($con,$query);

            return $result;
        }
    }
?>