<?php


//determino una stringa che sarà il mio paragrafo originale
 $stringaOriginale = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat non eligendi molestias, cum iste officia sequi provident, deleniti debitis officiis incidunt cupiditate quisquam id accusamus consequuntur accusantium voluptas autem veritatis!';

//stampo la lunghezza del mio paragrafo
 $stampaLunghezza =  strlen($stringaOriginale);

 // creo una variabile che con il metodo GET mi prenda la censura
 $censura = $_GET ['censura'];
//creo una variabile per il paragrafo cnesurato
//str_ireplace non è case sensitive 
 $paragrafoCensurato = str_ireplace($censura, '***', $stringaOriginale);
 //creo una variabile per stampare la lugnhezza del paragrafo cnesurato
 $lunghezzaParagrafoCensurato = strlen($paragrafoCensurato);



 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Badwords</title>
 </head>
 <body>

    <h1>Il paragrafo originale è</h1>
    <p> <?php echo $stringaOriginale ?> </p>

    <h1>La lunghezza originale del paragrafo è:</h1>
    <p> Il paragrafo è lungo: <?php   echo $stampaLunghezza; ?></p>

    <h1>Il pragrafo censurato è:</h1>
    <p> <?php echo $paragrafoCensurato?> </p>

    <h1>La lunghezza del paragrafo censurato è:</h1>
    <p> Il paragrafo è lungo: <?php   echo $lunghezzaParagrafoCensurato; ?></p>




 </body>
 </html>




