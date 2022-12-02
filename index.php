<!--En esta ho -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO BASICO PHP</title>
    </head>
     <body>

     <style>
      /*.Resaltar forma parte de la LECCION 6 */
      .resaltar {
        color: red;
        font-weight: bold;
      }


     </style>

   
        <?php
               /*Leccion 1/SINTAXIS/PRINT aqui vemos algunos ejemplos de etiquetas de abertura y cierre + algunos print con texto
                incluyendo varias etiquetas <BR> para aplicar unos cuantos saltos de linea*/
               echo "LECCION 1 <BR>";
               print "Bienvenidos al curso de PHP<br>";
               print "En este documento comenzaremos a conocer PHP <br> <br> <br>";    
        ?>

        <?php
               //Leccion 2/VARIABLES/CONCADENADORES Aqui declaramos algunas variables y las concadenamos usando un (.)      
               echo "LECCION 2 <BR>";
               $nombre = "FNF";
               $edad = 24;

               print "Mi nombre es " . $nombre . " y tengo " . $edad . " anios.<br>";
               //En el ejemplo de abajo hemos resumido la linea de arriba poniendo $ y el nombre de la variable dentro de las mismas comillas.
               print "Mi nombre es $nombre y tengo $edad anios.<br> ";
               //echo sirve para poner varios datos separados por , y aparte reduce el tiempo de procesado.
               echo $nombre," ",$edad,"<br> <br> <br>";
        ?>


        <?php
              /*LECCION 3/FUNCIONES declaramos 2 echos para que se vean en nuestra pagina*/
              echo "LECCION 3 <BR>";
              echo "Este es el primer mensaje<br>";
              /*declaramos una funcion que al ser llamada pondra un echo*/
              dameDatos();

              //Las  funciones hacen que se ejecuten las lineas de codigo que hay dentro de los corchetes cada vez que la funcion sea llamada.
              function dameDatos(){
              echo "Este es el mensaje guardado dentro de la funcion<br>";
            }
              echo "Este es el segundo mensaje<br> <br> <br> ";
              //llamamos a la funcion en la siguiente linea.

              /*Podemos aislar una funcion en un nuevo documento PHP para reutilizarla, 
              para enlazar los documentos usamos la siguiente linea de codigo.*/
              //******  include("proporciona_datos.php"); ******//
              /*Cuando ejecutamos el codigo, al llegar a la linea del include ejecutara el codigo del archivo que se haya enlazado. */             
        ?>

        <?php
              /*LECCION 4/GLOBAL/LOCAL/(SUPER GLOBAL lo daremos mas tarde)//
              En este ejercicio hemos declarado una variable $nombre y despues la hemos intentado re-asignar. 
              Daba un error ya que PHP creeia que nos estabamos refiriendo a una variable local\diferente a la nuestra.*/
              echo "LECCION 4 <BR>";

              $nombre = "BlackandRed";
              function dameNombre(){
              //Aqui arreglamos el error diciendole a PHP que nuestra variable $nombre es GLOBAL asi que empezara a re-asignar los nombres declarados.
              global $nombre;
              $nombre = "Fran <br><br><br>";
            
            }
              dameNombre();
              //El resultado nos da Maria ya que hemos reasignado la variable $nombre llamando a la funcion dameNombre. 
              echo $nombre;
        ?>

  
      <?php

             /*LECCION 5/VARIABLES ESTATICAS/ Si no ponemos STATIC dentro de la funcion su valor se destruye al terminar la misma,
              poniendo static hacemos que su vcalor permanezca y ponamos usar el operador ++ para asi ir incrementando en 1 su valor cada vez que la llamemos. */
              echo "LECCION 5 <BR>";
             function incrementaVariable(){

              static $contador = 0;
              $contador++;
              echo $contador . "<br>";

             }
             incrementaVariable();
             incrementaVariable();
             incrementaVariable();
             incrementaVariable();
             incrementaVariable();
              
             echo "<br><br>";
        ?>
        
      <?php
         //LECCION 6/STRINGS
         echo "LECCION 6 <BR>";
         //en la linea siguiente vemos un echo con un parrafo clase resaltar (que hemos creado al principio del body entre etquiteas <style>)
         //haciendo que este parrafo nuevo tenga un estilo definifo (resaltar en rojo)
         echo"<p class='resaltar'>Esto es un ejemplo de frase</p>";
           
         /*Ahora creamos variables para hacer unas comparaciones con (strcm) & (strcasecmp).
         strcmp -> Compara los valores (string/letras) teniendo en cuenta las Mayusculas y Minusculas.
         strcasecmp -> Compara los valores (string/letras) sin tener en cuenta las Mayusculas y Minusculas.  */
         
         $variable1 = "Casa";
         $variable2 = "CASA";
         $resultado = strcasecmp($variable1,$variable2);
          if($resultado <= 0) {
            echo "Los strings son iguales ya que el valor es $resultado";
          }else{
            echo "Los strings no son iguales ya que el resultado es $resultado";
          }
         ?>

         <?php
         //Leccion 7/Operadores.
         //En esta clase veremos operadores, algo muy sencillo cosa que no me molestare en explicar sino que dejare unos ejemplos.
         
         $var1 = 5;
         $var2 = 8;
         $var3 = 8;
         $var4 = 10;
         
         //ejemplo de (==) (igual que) este resultado dara false ya que no coinciden.
         if($var1 == $var2){
          echo "var 1 es igual que var 2";

         }else{
          echo "Var1 no es igual a Var2";
         }

         //ejemplo (===) (ideantico a)
         if($var2 === $var3){
          echo"Las variables comparadas son identicas en su valor";
         }else{
          echo"Variables no coinciden";
         }

         //ejemplo (!=) (diferente que)
         if($var3 != $var4){
          echo"Verdadero, estas variables si son diferentes";
         }else{
          echo "Esta comparacion es falsa las variables no son diferentes";
         }

         //ejemplo (<>) (diferente que y ademas de diferente tipo)
         if($var1 <> $var2){
          echo "True -> Estas variables son diferentes y de diferente tipo";
         }else{
          echo "False ->";
         }

         //Faltan ejemplos de (< menor que) (> mayor que) (<= menor igual que) (>= mayor igual que) pero queda claro como se comparan las variables.
         ?>

         <!--A continuacion: Ejercicio donde pondremos todo lo que hemos aprendido por ahora. -->
         <?php

         



         
         ?>



    </body>
</html>