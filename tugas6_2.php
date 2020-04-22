<?php
  $hargajambu = 15000;
  $hargadus = 2000;
  $dus = 6;
  $jumlahjambu = $dus * 5 ;
  $totalhargajambu = $jumlahjambu * $hargajambu;
  $totalhargadussisa = $hargadus * 2;
  $totalharga = $totalhargajambu + $totalhargadussisa;
  echo "Seorang pedagang menjual jambu dengan harga
  Rp 15.000/kg. Di dalam tokonya terdapat 6 dus dan
  di setiap dus berisi 5 kg jambu. Dua bekas tempat
  jambu itu masih bisa dijual lagi dengan harga
  Rp 2.000/dus. Berapakah uang hasil penjualan seluruh
  jambu dan dus tersebut? <br>";
  echo "Solusi : <br>";
  echo "Jumlah Jambu = $dus dus * 5kg = $jumlahjambu kg <br>";
  echo "Harga Total Jambu : $jumlahjambu kg x Rp. $hargajambu = Rp. $totalhargajambu <br>";
  echo "Harga Total Dus Sisa : $hargadus x 2 = Rp. $totalhargadussisa <br>";
  echo "Harga Total = Rp. $totalhargajambu + Rp. $totalhargadussisa = Rp. $totalharga <br>";

  echo "<br>";
  echo "Jawaban :<br>";
  echo "============================================<br>";
  echo "Harga Jambu = Rp. $hargajambu /kg.-  <br>";
  echo "Harga Kardus = Rp. $hargadus  /pcs.- <br>";
  echo "Total Penjualan (Dus dan Jambu)= Rp. $totalharga<br>";
  echo "============================================<br>";
?>
