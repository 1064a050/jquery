<?php
include './common/commonFun.php';

?>

<?php
// init curl
$ch = curl_init();
// 
curl_setopt($ch, CURLOPT_URL ,"https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json?page=0&size=5");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result= curl_exec($ch);

curl_close($ch);

echo $result; 