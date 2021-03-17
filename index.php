<?php

$fields='{"user_data": [ {"course_id": "111784520210308113430","course_status":"1","rating": "5","review": "good"}]}';
$ch = curl_init();
$headers  = [
            'x-api-key:xxxxxxxxxxxxxxxxx',                        //Enter Here API-Key
            'Content-Type: application/json'                      // Enter Here  Content Type
            ]; 

curl_setopt($ch, CURLOPT_URL,"http://test.org/API/userupdate");  // Enetr Url Here
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);           
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result     = curl_exec ($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$err = curl_error($ch);
curl_close($ch);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
   $arrayResult = json_decode($result,true);
   echo'<pre>';
   print_r($arrayResult);  
}
?>
