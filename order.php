<?php

$orders = json_decode(file_get_contents('order.json'), true);
if ($orders === null) {
    echo "Error parsing JSON data.\n";
    exit(1);
}

function incons($orders){
    $incons = 0;

    foreach ($orders as $order){

    if(empty($order['customer']['id'] && $order['customer']['name']  ) )
        $orderId = $order['order_id'];
        $incons = "$orderId eroor const";
    }
    return $incons;
}


$conts = incons($orders);
//echo implode(",", $conts);
echo $conts;

?>