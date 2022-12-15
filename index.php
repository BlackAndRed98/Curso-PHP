<!--En esta ho -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO BASICO PHP</title>
    </head>
    <!--En este curso de ejercicios completados veremos todo lo basico sobre el lenguaje PHP 
    con un servidor abierto desde wampserver y todos los serviciod conectados , En la parte Style crearemos un disenyo basico
    para que asi nuestro curso se vea mas agradable, TODOS LOS EJERCICIOS YA ESTAN RESUELTOS.
    Este documento explica y ensenya el codigo los resultados se ven en la pagina anadiendo LOCAL SERVER/CursoPHP en
    la barra del navegador (siempre y cuando nuestro servidor este abierto).

    Conocimientos basicos a tener en cuenta 
    -- Seria medio obligatorio entender y saber lenguajes como HTML y CSS3.
    -- Leer codigo / abrir un servidor en WampServer con todos los servicios activados.
    -- Saber Ingles basico
    -- Crear carpetas y rediccionar documentos (informatica basica)
    
    Mi nombre es FNF y este es el curso escrito de PHP siguiendo de guia el canal de Youtube de (PILDORASINFORMATICAS CURSO DE PHP Y MYSQL).
    Gracias.
   
    1.Empezaremos creando un documento HTML en el cual crearemos nuestro Codigo.
    2.A continuacion sabiendo un poco de Css pondremos colores de fondo y disenyo.

   -->
    <style>
      /*.Resaltar forma parte de la LECCION 6 */
      .resaltar {
        color: red;
        font-weight: bold;
      }
      *{
        text-align: center;
        margin-left: 5px;
        margin-right: 5px;
        color: azure;
        background-color: black;
        
      }
      

      h2{
        color:orangered;
        border-style: double;
        border-color: blue;
        border-radius: 10%;
       
      }

      .resaltarAzul{
        color: blue;
        font-weight: bold;
      }
      
      h1 {
        text-align: center;
      }

     form{
        border-style: ridge;
       
        
        height: 30vh;
        display: grid;
        justify-content: center;
        justify-items: center;
        color: aliceblue;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;  
       
      }

      .boton{
        background-color: black;
        color: red;
        font-size: larger;
        border-style: ridge;
        border-color: aliceblue;
        font-family:'Times New Roman', Times, serif;
        width: 150px;
        
        
      }
      .no_validado {
        font-size: 18px;
        color: red;
        font-weight: bold;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        border-style: ridge;
        border-color: red;
        


      }

      .validado{
        font-size: 20px;
        color: green;
        font-weight: bold;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        position: relative;
        border-style: ridge;
        border-color: green;
        

      }

      
      
      

    

     </style>
     <body>
      <h1>Curso PHP</h1>
     

      
     </form>
    

    <!--A partir de aqui iremos separando los codigos PHP por Lecciones -->

   
        <?php
               /*Leccion 1/SINTAXIS/PRINT aqui vemos algunos ejemplos de etiquetas de abertura y cierre + algunos print con texto
                incluyendo varias etiquetas <BR> para aplicar unos cuantos saltos de linea*/
               echo "<h2>LECCION 1 / hacer prints con (echo)</h2> <BR>";
               print "Bienvenidos al curso de PHP<br>";
               print "En este documento comenzaremos a conocer PHP. <br> <br> <br> <h3>NOTA: Todos los detalles de los ejercicios y explicaciones estan en el documento php en comentarios.</h3><br> <br> <br>";    
        ?>

        <?php
               //Leccion 2/VARIABLES/CONCADENADORES Aqui declaramos algunas variables y las concadenamos usando un (.)      
               echo "<h2>LECCION 2 sintaxis basica</h2> <BR>";
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
              echo "<h2>LECCION 3 Primera Funcion</h2> <BR>";
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
              echo "<h2>LECCION 4 GLOBAL / LOCAL / SUPERGLOBAL</h2> <BR>";

              $nombre = "BlackandRed";
              function dameNombre(){
              //Aqui arreglamos el error diciendole a PHP que nuestra variable $nombre es GLOBAL asi que empezara a re-asignar los nombres declarados.
              global $nombre;
              $nombre = "FNF <br><br><br>";
            
            }
              dameNombre();
              //El resultado nos da Maria ya que hemos reasignado la variable $nombre llamando a la funcion dameNombre. 
              echo $nombre;
        ?>

  
      <?php

             /*LECCION 5/VARIABLES ESTATICAS/ Si no ponemos STATIC dentro de la funcion su valor se destruye al terminar la misma,
              poniendo static hacemos que su vcalor permanezca y ponamos usar el operador ++ para asi ir incrementando en 1 su valor cada vez que la llamemos. */
              echo "<h2>LECCION 5 Variables Estaticas</h2> <BR>";
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
             /*CADA VEZ QUE LLAMEMOS A ESTA FUNCION (incrementarVariable) haremos que en nuestra pagina se vaya anyadiendo otro numero mas en orden incrementativo*/
        ?>
        
      <?php
         //LECCION 6/STRINGS
         echo "<h2>LECCION 6 Strings</h2><BR>";
         //en la linea siguiente vemos un echo con un parrafo clase resaltar (que hemos creado al principio del body entre etquiteas <style>)
         //haciendo que este parrafo nuevo tenga un estilo definifo (resaltar en rojo)
         echo"<p class='resaltarAzul'>Esto es un ejemplo de frase</p>";
           
         /*Ahora creamos variables para hacer unas comparaciones con (strcm) & (strcasecmp).
         strcmp -> Compara los valores (string/letras) teniendo en cuenta las Mayusculas y Minusculas.
         strcasecmp -> Compara los valores (string/letras) sin tener en cuenta las Mayusculas y Minusculas.  */
         
         $variable1 = "Casa";
         $variable2 = "CASA";
         $resultado = strcasecmp($variable1,$variable2);
          if($resultado <= 0) {
            echo "Los strings son iguales ya que el valor es $resultado <br><br>";
          }else{
            echo "Los strings no son iguales ya que el resultado es $resultado <br> <br> <br> <br>";
          }
         ?>
         

         <?php
         //Leccion 7/Operadores.
         echo ("<h2>LECCION 7 OPERADORES </h2><br><br><br>");
         //En esta clase veremos operadores, algo muy sencillo cosa que no me molestare en explicar sino que dejare unos ejemplos.
         
         $var1 = 5;
         $var2 = 8;
         $var3 = 8;
         $var4 = 10;
         
         //ejemplo de (==) (igual que) este resultado dara false ya que no coinciden.
         if($var1 == $var2){
          echo "var 1 es igual que var 2<br>  <br>";

         }else{
          echo "Var1 no es igual a Var2<br>  <br>";
         }

         //ejemplo (===) (ideantico a)
         if($var2 === $var3){
          echo"Las variables comparadas son identicas en su valor<br>  <br>";
         }else{
          echo"Variables no coinciden<br>  <br>";
         }

         //ejemplo (!=) (diferente que)
         if($var3 != $var4){
          echo"Verdadero, estas variables si son diferentes<br>  <br>";
         }else{
          echo "Esta comparacion es falsa las variables no son diferentes<br>  <br>";
         }

         //ejemplo (<>) (diferente que y ademas de diferente tipo)
         if($var1 <> $var2){
          echo "True -> Estas variables son diferentes y de diferente tipo<br>  <br>";
         }else{
          echo "False -><br>  <br>";
         }

         /*Faltan ejemplos de (< menor que) (> mayor que) (<= menor igual que) (>= mayor igual que) pero queda claro como se comparan las variables.*/
         
         /*A continuacion creamos un formulario para que podamos agregar valores (un nombre) y (una edad)
        */

        ?>
         <form action="" method="post" name="datos_usuario" id="datos_usuario">
         <table>
           <p><center>Este formulario forma parte de la leccion 7 en la que aplicamos todo lo anterior aprendido</center></p><br>
           <tr>
             <td>Nombre:</td>
             <td><label for="nombre_usuario"></label>
           <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
           </tr>
   
           <tr>
             <td>Edad:</td>
             <td><label for="edad_usuario"></label>
           <input type="text" name="edad_usuario" id="edad_usuario"></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td colspan="2"><input type="submit" name="enviando" class="boton" id="enviando" value="Enviar"></td>
           </tr>
         </table>
        </form><!--Fin del formulario y empieza nuestro codigo PHP -->

         <?php

         //En este ejercicio nos pedia un nombre y una edad, podriamos jugar con los operadores para conseguir diferentes resultados ante el acceso.
         // ej: En este ejemplo daria igual el nombre pero no la edad, podriamos pedir nombre y edad unicos para el acceso o bien da igual la edad mientras el nombre sea correcto,
         // a eso nos referimos cuando decimos que podemos jugar con los operadores (== igual a, =! diferente a, < menor que, > mayor que, === extrictamente igual a.)
         // Usamos IF y ELSE para crear estas condiciones

         if(isset($_POST["enviando"])){
           $usuario = $_POST["nombre_usuario"];
           $edad = $_POST["edad_usuario"];

           if($edad > 18 ){
             echo ("<p class='validado'>Accediendo...</p>");
        
            }else{
             echo ("<p class='no_validado'>Edad invalida</p>");
           }
         }
         //Si queremos enlazar un formlario html a otro documento PHP usaremos

         // ej;  <form action = "validacion.php">   el resultado se vera en una pagina nueva, en el documento php externo podriamos anyadir estilos 

        
         ?> 
         
         

         <?php
         //LECCION 8 // DEFINICION Y DECLARACION DE CONSTANTES

         echo "<h2>LECCION 8 DEFINICION Y DECLARACION DE CONSTANTES</h2>";

         define("AUTOR", "FNF");
         echo ("este es el resultado guardado dentro de AUTOR : ". AUTOR);
         //DEFINE = Lo utilizamos para crear CONSTANTES 

         //DEFINE tiene 3 valores, el nombre en string todo mayusculas, El valor y un booleano para 
         //que pueda diferenciar entre mayusculas y minusculas.

         ?>

         <!--LECCION 9 // OPERADORES 1 (Bastante similares a los de otros lenguajes) --

        1. Empezaremos creando un formulario con todos los operadores que veremos

        2. Nuestra intencion es que podamos hacer operaciones, queremos que al poner dos valores
           y elegir una opcion /suma/resta..etc. Se envien los datos a nuestro servidor para que sea resuelta
          la operacion y que cuando acabe no devuelva el resultado en nuestra pagina.-->


        <h2>LECCION 9 // OPERADORES 1.</h2>

        <p>&nbsp;</p>
        
        <form name="form1" method="post" action="" style="height: 50vh;">
          <p>Creamos un formulario tipo calculadora</p>
          <p>
            <label for="num1">Introduzca un valor --></label>
            <input type="text" name="num1" id="num1">
            <label for="num2">Introduzca un valor --></label>
            <input type="text" name="num2" id="num2">
            <br>
            <br>
            <label for="operacion">Eligue la operacion</label>
            <select name="operacion" id="operacion" class="boton">
              <option>Suma</option>
              <option>Resta</option>
              <option>Multiplicacion</option>
              <option>Division</option>
              <option>Modulo</option>
            </select>
          </p>
          <p>
            <input type="submit" name="button" id="button" class="boton" value="Enviar" onclick="prueba">
          </p>
        </form>
        <p>&nbsp;</p>
        <!--FIN DEL FORMULARIO COMIENZA NUESTRO CODIGO PHP -->


        <!-- 1. Agregamos una condicion IF con un ISSET que toma las acciones del usuario .

          -- 2. Agregamos una funcion SUPERGLOBAL { $_POST[] } que funciona para coger los ID's de nuestro codigo HTML en el que
                hemos creado el formulario

          -- 3. Dentro de los [] debe ir el ID rodeado de comillas dobles ". ["button1"] linea de ejemplo:396--

          -- 4. Despues declararemos las 3 variables [$numero1 con ID "num1", $numero2 con ID "num2" , $operacion ID "operacion"] 
          -- 5. Agregamos otro IF dentro de el primero que ya tiene la funcion ISSET 
          -- 6. !strcmp == string compare para que compare los strings con lo que el usuario haya escogido $operacion
             y asi poder hacer la operacion
          -- 7. Ahora solo queda agregar las variables $NUMEROS con el simbolo de operacion correspondientes en varios IF
        Y ya tendriamos nuestra calculadora para hacer operaciones.-->
          
        <?php
        if (isset($_POST["button"])) {

          $numero1 = $_POST["num1"];
          $numero2 = $_POST["num2"];
          $operacion = $_POST["operacion"];

          if (!strcmp("Suma", $operacion)) {

            echo "<h3>El resultado es: </h3>" . ($numero1 + $numero2);

          }
          if (!strcmp("Resta", $operacion)) {

            echo "<h3>El resultado es: </h3>" . ($numero1 - $numero2);

          }
          if (!strcmp("Multiplicacion", $operacion)) {

            echo "<h3>El resultado es: </h3>" . ($numero1 * $numero2);

          }
          if (!strcmp("Division", $operacion)) {

            echo "<h3>El resultado es: </h3>" . ($numero1 / $numero2);

          }
          if (!strcmp("Modulo", $operacion)) {

            echo "<h3>El resultado es: </h3>" . ($numero1 % $numero2);

          }


        }
         
         
         ?>





    </body>
</html>