<html>
    <head>
        <meta charset="UTF-8">
        <title>Leccion1</title>
    </head>
    <body>

   
    <?php
         /*Leccion1/ aqui vemos algunos ejemplos de etiquetas de abertura y cierre + algunos print con texto
         inclutendo 2 etiquetas BR para aplicar un salto de linea*/

         print "Bienvenidos al curso de Php<br>";
         print "Nos vemos en el siguiente video<br><br><br><br>";    
    ?>

    <?php
         //Leccion2/ Aqui declaramos algunas variables y las concadenamos usando un (.)      
    
         $nombre = "FNF";
         $edad = 24;

         print "Mi nombre es " . $nombre . " y tengo " . $edad . " anios.<br>";
         //En el ejemplo de abajo hemos resumido la linea de arriba poniendo $ y el nombre de la variable dentro de las mismas comillas.
         print "Mi nombre es $nombre y tengo $edad anios. ";
         //echo sirve para poner varios datos separados por , y aparte reduce el tiempo de procesado.
         echo $nombre," ",$edad,"<br><br><br>";
    ?>


    <?php
         /*declaramos 2 echos para que se vean en nuestra pagina*/
         echo "Este es el primer parrafo<br>";
         /*declaramos una funcion que al ser llamada pondra un echo*/
         function dameDatos(){
         echo "este es el mensaje guardado dentro de la funcion";
        }
        echo "Este es el segundo mensaje<br>";
        //llamamos a la funcion en la siguiente linea.
        dameDatos();


    ?>


    </body>
</html>