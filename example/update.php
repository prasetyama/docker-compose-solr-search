<?php 

      $ch = curl_init();

      $delete_data = array(
          "delete" => array(
            "query" => "seo:mc-keesport-candy"
          )
      );

      $data_string_delete = json_encode($delete_data);

      curl_setopt($ch, CURLOPT_URL, "http://localhost:8983/solr/gettingstarted/update?commit=true");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string_delete);

      $headers = array();
      $headers[] = "Content-Type: application/json";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      $response = curl_exec($ch);                     
      
      curl_close ($ch);


      $ch = curl_init();

      $data = array(
          "add" => array( 
              "doc" => array(
                  "manufacture" => "Mc Keesport Candy 2",
                  "composition" => "gula, sirup jagung, Asam adipat, Hydrog, Palm Kernel & Palm Oils and Soybean Oil",
                  "price" => "18000",
                  "name" => "Pez Character Chewing Candy 2",
                  "brand_name" => "Others",
                  "new_category_name" => "Permen",
                  "seo" => str_replace( ' ', '-', strtolower("Mc Keesport Candy 2")),
                  "image" => "pez character chewing candy.jpg"
              )
          ),
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

?>