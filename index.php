<?php 
    define("HELLOWORLD", "hello world!");   //2

    $helloworld="Learning PHP"; //3
    $helloworld=(HELLOWORLD);  //3

    $hello="hello "; //4
    $world="world!"; //4

    $array=["hello ", "world!"]; //5
?>


<!DOCTYPE HTML>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <title>B3W1L2</title>
    </head>
        <body>
            <h1><?php echo"hello world!";?></h1>    <!--1-->
            <h1><?php echo(HELLOWORLD)?></h1>   <!--2-->
            <h1><?php echo$helloworld?></h1>    <!--3-->
            <h1><?php echo$hello, $world?></h1> <!--4-->
            <h1><?php echo$array[0], $array[1]?></h1> <!--5-->
        </body>
</html>