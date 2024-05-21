<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <title>Kalkulātors</title>

    </head>
<body>
<form method="GET">
    <h1>Kalkulātors</h1>
    <!-- Zīmes jeb simboli -->   
    <l>
     <h2> Reizināšana: * </h2>
     <h2> Atņemšana: - </h2>
     <h2> Dalīšana: / </h2>
     <h2> Saskaitīšana: + </h2>
    </l>
    <!-- Ievade -->   
    <p>Ievadi pirmo skaitli:</p>
    <input type="text" name="Skaitlis1">
    <p>Ievadi otro skaitli:</p>
    <input type="text" name="Skaitlis2">
    <p>Ievadi zīmi:</p>
    <input type="text" name="simbols">
    <button>Kalkulē</button>
    </form>
    <?php
    #Mainīgie
    $Sk1= $_GET['Skaitlis1'];
    $Sk2= $_GET['Skaitlis2'];
    $Simbols =$_GET['simbols'];
    #Izvade
    if($Simbols == '+')
    {
        $Summa = $Sk1 + $Sk2;
        echo "Summa ir:".$Summa;
    }
    else if($Simbols == '-')
    {
        $Starpība = $Sk1 - $Sk2;
        echo "Starpība ir:".$Starpība;
    }
    else if($Simbols == '*')
    {
        $Reizinājums  = $Sk1 * $Sk2;
        echo "Reizinājums ir:".$Reizinājums ;
    }
    else if($Simbols == '/')
    {
        $Dalījums = $Sk1 / $Sk2;
        echo "Dalījums ir:".$Dalījums;
    #Kļūda, Simbols nesakrīt ar dotajiem simboliem.
    }
    else
    { 
        echo "Kļūda";
    }
    ?>
    </body> 
</html>
