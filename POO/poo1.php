<?php
        //Creacion de clase
        class Coche{
            //Atributos de clase
            private int $ruedas;
            private string $motor;
            private int $puertas;
            private string $color;
            //Constructor de la clase con paso de parametros
            public function __construct (){
                $this -> color = "";
                $this -> ruedas = 4;
                $this -> motor = 1600;
                $this -> puertas = 3;
            }

            //Métodos
            function arrancar(){
                echo "<br>Arrancó el vehículo";
            }
            function girar(){
                echo "<br>El vehículo esta doblando";
            }
            function frenar(){
                echo "<br>El vehículo está frenando";
            }
            function establece_color($color_auto){
                $this -> color = $color_auto;
                echo "<br>El color de este auto es: " . $this->color;
            }
        }
       
        
        

?>
