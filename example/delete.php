<?php
$ch = curl_init();

  $data = array(
      "delete" => array(
        "query" => "seo:mc-keesport-candy"
      )
  );

  $data_string = json_encode($data);

  curl_setopt($ch, CURLOPT_URL, "http://localhost:8983/solr/gettingstarted/update?commit=true");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

  $headers = array();
  $headers[] = "Content-Type: application/json";
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $response = curl_exec($ch);                     
  
  curl_close ($ch);

  print_r($response);

  exit();

?>