<html>
<head>
    <title>PHP Problem Set 3</title>
    <style type="text/css">
        #kutu
        {
            color:cadetblue;
            margin-left: 20px;
            margin-top: 20px;
        }
        #goster
        {
            margin-left: 125px;
            margin-top: 20px;
        }
        #tikla
        {
            margin-left: 105px;
            padding: 10px;
            font-family:monospace;
        }
        #kod
        {
            color:blueviolet;
            padding: 0px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div id="kutu">
    <form action="phpProblemSet3.php" method="post">
        <font id="metin"> Bir sayı giriniz: </font>
        <input id="metinKutusu" name="asal" type="text" ><br><br>
        <input id="tikla" name="buton" type="submit" value="Sonucu Göster" color="red">
    </form>
</div>
<div id="goster">
    <font id="kod">
    <?php
        $sayi=$_POST['asal'];
        $asal=0;
        for($i=2;$i < $sayi; $i++)
        {
            if ($sayi % $i == 0)
            {
                $asal = 1;
            }
        }
        
        if ($asal != 1)
        {
            echo $sayi. " sayısı Asaldır";
        }
        else
        {
            echo $sayi." sayısı Asal Değildir !!";
        }
    ?>
    </font>
</div>

</body>
</html>