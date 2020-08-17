<?php
$address = Trim(stripslashes($_POST['address']));

echo "$address";
if(!empty($address)) {
    $csvData = $address .;
    $fp = fopen("../csv files/policeviolenceadd.csv", "a");
    if($fp)
    {
        fwrite($fp,$csvData."\n");
        fclose($fp);
    }
}
?>