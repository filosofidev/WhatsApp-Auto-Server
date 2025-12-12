<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://app.sman1cepu.sch.id/api/sendGroup',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('device_id' => '3b406fa2eb5a1dd20f6e7d81e846b6500','group' => 'KEDINASAN SMA NEGERI 1 CEPU','message' => 'Assalamualaikum warahmatullahi wabarakatuh, Selamat Sore,
Mohon maaf mengganggu Bapak Ibu ASN dan Non ASN, hanya mengingatkan, jangan lupa untuk absen pulang kerja,
jangan sampai melebihi ambang batas waktu ya,*jangan lupa cek rekap presensinya di aplikasi Sinaganya (ASN) *🙂
semoga sehat selalu
terima kasih
Wassalamualaikum warahmatullahi wabarakatuh'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;