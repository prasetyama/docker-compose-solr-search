<?php 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8983/solr/gettingstarted/select?q=name:Wrigles&wt=json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

print_r($result);
exit();
curl_close($ch);

$result_json = json_decode($result,true);

echo "<pre>";
print_r($result_json);
echo "</pre>";

exit();

return print_r($result_json);

?>