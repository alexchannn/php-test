<?php

for ($i = 1; $i <= 10; $i++) {
   echo $i;
   if ($i < 10) {
      echo "-";
   }
}

echo "<br><br>";

function cekBMI($berat_badan, $tinggi_badan)
{
   $bmi = $berat_badan / ($tinggi_badan * $tinggi_badan);
   $bmi = number_format($bmi, 2);
   if ($bmi < 18.5) {
      echo "Berat badan " . $berat_badan . "kg dan tinggi badan " . $tinggi_badan . "m hasil BMI " . $bmi . " termasuk kategori Kurus";
   } elseif ($bmi >= 18.5 && $bmi < 24.9) {
      echo "Berat badan " . $berat_badan . "kg dan tinggi badan " . $tinggi_badan . "m hasil BMI " . $bmi . " termasuk kategori Normal";
   } elseif ($bmi >= 25) {
      echo "Berat badan " . $berat_badan . "kg dan tinggi badan " . $tinggi_badan . "m hasil BMI " . $bmi . " termasuk kategori Gemuk";
   }
}

cekBMI(45, 1.65);
echo "<br>";
cekBMI(55, 1.65);
echo "<br>";
cekBMI(70, 1.65);

echo "<br><br>";

function cekPembayaran($total_belanjaan)
{
   if ($total_belanjaan < 500000) {
      $diskon = $total_belanjaan * 0;
      $total_pembayaran = $total_belanjaan - $diskon;
      echo "Total belanjaan = " . $total_belanjaan . ", diskon = " . $diskon . ", Total Pembayaran = " . $total_pembayaran;
   } elseif ($total_belanjaan > 500000 && $total_belanjaan < 1000000) {
      $diskon = $total_belanjaan * 0.10;
      $total_pembayaran = $total_belanjaan - $diskon;
      echo "Total belanjaan = " . $total_belanjaan . ", diskon = " . $diskon . ", Total Pembayaran = " . $total_pembayaran;
   } elseif ($total_belanjaan > 1000000) {
      $diskon = $total_belanjaan * 0.15;
      $total_pembayaran = $total_belanjaan - $diskon;
      echo "Total belanjaan = " . $total_belanjaan . ", diskon = " . $diskon . ", Total Pembayaran = " . $total_pembayaran;
   } else {
      echo "Error";
   }
}

cekPembayaran(300000);
echo "<br>";
cekPembayaran(650000);
echo "<br>";
cekPembayaran(1100000);
