<html>
<head>
  <title>PHP Problem Set 2</title>
</head>
<body>

  <form action="phpProblemSet2.php" method="post">
  Bir sayı giriniz: 
    <input name="girilecekSayi" type="text"><br><br>
    <input name="gonder" type="submit" value="Sonucu Göster">
  </form>

  <?php
  $mukemmel = "<script> alert('Mükemmel Sayı') </script>";
  $mukemmelDegil = "<script> alert('Mükemmel Sayı Değil') </script>";
  if (isset($_POST['girilecekSayi']))
  {
    $sayi = $_POST['girilecekSayi'];
    for($i=1; $i <= $sayi/2; $i++)
    {
      if ($sayi % $i == 0)
      {
          $bolenler[]=$i;
      }
    }
    echo "$sayi sayısının tam bölenleri:<br>";
    for ($i = 0; @$bolenler[$i]; $i++)
    {
      echo $bolenler[$i]," "; 
    }
    $toplam = array_sum($bolenler);
    echo "<br><br>Bölenlerin Toplamı: <br>".$toplam." = ".$sayi."<br>";
  
    if($sayi == $toplam)
    {
      echo $mukemmel;
    }
    else
    {
      echo $mukemmelDegil;
    }
  }

  else
  {
    echo "Sayı Giriniz!!";
  }

  ?>
</body>
</html>