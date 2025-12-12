<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://app.sman1cepu.sch.id/api/callOut',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_Call => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('device_id' => '3b406fa2eb5a1dd20f6e7d81e846b6500','callout' => 'Masukkan gmail yang sinkron dengan kontak WhatsApp'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;