<html>
<head>
    <title>PHP Problem Set 4</title>
    <style type="text/css">
        #alisTutar, #odenenPara 
        {
            border: 2px solid cadetblue;
            background-color:seashell;
            padding: 10px;
        }
        #tutarText, #miktarText
        {
            border: 2px dotted darkred;
            background-color:seashell;
            padding: 10px;
        }
        #hesapla
        {
            font-size:large;
            margin: 5px;
        }
        #hesaplaTablo
        {
            text-align: center;
        }
    </style>
</head>
<body>
<table>
    <form action="phpProblemSet4.php" method="post">
    <tr>
        <td id="alisTutar">Alışveriş Tutarını Giriniz:</td>
        <td id="tutarText"><input name="tutar" type="text" /></td>
    </tr>
    <tr>
        <td id="odenenPara">Ödenen Parayı Giriniz:</td>
        <td id="miktarText"><input name="miktar" type="text" /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td id="hesaplaTablo"><input id="hesapla" name="gonder" type="submit" value="Hesapla" /></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    </form>
</table>

<?php
    
    $tutar=$_POST['tutar'];
    $odenen=$_POST['miktar'];
    echo "Alışveriş Tutarı: ".$tutar."<br>";
    echo "Ödenen Tutar: ".$odenen."<br>";
    $deger=$odenen-$tutar;
    echo "Para Üstü:".$deger."<br><br>";
    if($deger > 0)
    {
        $birlira = floor($deger/1.00);
        echo "1 Lira: ".$birlira." tane<br>";
        $deger -= $birlira;
        $ellikuruş = floor($deger/0.50);
        echo "50 Kuruş: ".$ellikuruş." tane<br>";
        $deger -= $ellikuruş;
        $yirmibeskurus = floor($deger/0.25);
        echo "25 Kuruş: ".$yirmibeskurus." tane<br>";
        $deger -= $yirmibeskurus;
        $beskurus = floor($deger/0.05);
        echo "5 Kuruş: ".$beskurus." tane<br>";
        $deger -= $beskurus;
        $birkurus = floor($deger/0.01);
        echo "1 Kuruş: ".$birkurus." tane<br>";
        $deger -= $birkurus;
    }
    elseif ($deger <= 0)
    {
        echo "Para üstü yok";
    }
    
?>
</body>
</html>


<?php
    /*
    $paralar=[1,0.50,0.25,0.10,0.05,0.01];
    $verilenPara = 15;
    $alisveris = 7; 
    $paraUstu = $verilenPara - $alisveris;
    echo "<br>".$paraUstu."<br>"; 
    $adet=0;
    for($i = 0; $i <= 5; $i++)
    {
        $adet = $paraUstu / $paralar[$i];
        
        if($adet != 0)
        {
            echo $paralar[$i]. " TL: ".$adet. " adet <br>";
            $paraUstu %= $paralar[$i];
        }
        
    }
    */
?>