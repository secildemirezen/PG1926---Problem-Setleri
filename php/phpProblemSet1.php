<?php
  /*
    •	06:00 – 10:00 Günaydın
    •	10:00 – 17:00 İyi günler
    •	17:00 – 20:00 İyi akşamlar
    •	20:00 – 00:00 İyi geceler
    •	00:00 – 06:00 Esenlikler dilerim
  */

  
  $saat = date('H:i', strtotime("now"));
  if (($saat > date("06:00")) && ($saat <= date("10:00")))
  {
    echo "Saat: ".$saat."<br>Günaydın";
  }
  elseif (($saat > date("10:00")) && ($saat <= date("17:00")))
  {
    echo "Saat: ".$saat."<br>İyi Günler";
  }
  elseif (($saat > date("17:00")) && ($saat <= date("20:00")))
  {
    echo "Saat: ".$saat."<br>İyi Akşamlar";
  }
  elseif (($saat > date("20:00")) && ($saat <= date("00:00")))
  {
    echo "Saat: ".$saat."<br>İyi Geceler";
  }
  elseif (($saat > date("00:00")) && ($saat <= date("06:00")))
  {
    echo "Saat: ".$saat."<br>Esenlikler Dilerim :)";
  }











?>