<html>
<head>
    <title>Bill</title>
</head>
<body>
<?php
$price = $_POST["unit"];
if($price>0 && $price<=50){
    $calculate_bill = ($price*3.50);
    echo "Total Amount of ". $price;
    echo " - " . $calculate_bill;
}
else if(($price>50 && $price<=150)){
    $calculate_bill = ($price*4.00);
    echo "Total Amount of ". $price;
    echo " - " . $calculate_bill;
}
else if(($price>150 && $price<=250)){
    $calculate_bill = ($price*5.20);
    echo "Total Amount of ". $price;
    echo " - " . $calculate_bill;
}
else{
    $calculate_bill = ($price*6.50);
    echo "Total Amount of ". $price;
    echo " - " . $calculate_bill;
}
?> 
</body>
</html>