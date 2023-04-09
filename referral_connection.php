<?php

// babymelon.in wordpress database credentitals
$servername = "localhost";
$username = "u526730828_PoDuL";
$password = "US5mN18gl3";
$database="u526730828_LR5m1";

// Server conections
$server_connect = mysqli_connect($servername, $username, $password, $database);

// conditions done or not
if(!$server_connect){
    echo "Error to connect erver !";
}else{
    // cupon code data finding -> ID & Title
    $sql_query_cuponcode = "SELECT ID, post_name, post_type FROM `wp_posts`;";
    $query_sending = mysqli_query($server_connect, $sql_query_cuponcode);
    if(mysqli_num_rows($query_sending)>0){
        while($cuponcode_data = mysqli_fetch_assoc($query_sending)){

            if($cuponcode_data['post_type'] == 'shop_coupon'){

                echo $cuponcode_data['post_title']. "  ". $cuponcode_data['ID'];
                $cupon_id = $cuponcode_data['ID']; $cupon_code= $cuponcode_data['post_name'];
                // DATA SEND INTO CUPON REFERRAL
                $sql_data_send = "INSERT INTO `coupon_referral` ( `coupon_code`, `coupon_id`) VALUES ('$cupon_code', '$cupon_id');";
                $data_send = mysqli_query($server_connect, $sql_data_send);
                if($data_send){
                    echo "done<br>";
                }
            }
        }
    }
    
    $cuoponn = 'raj10';
    // Coupon code using details fetching
    $sql_query_cuponcode_order = "SELECT order_item_name, order_item_type, order_id FROM `wp_woocommerce_order_items`;";
    $query_sending_order = mysqli_query($server_connect, $sql_query_cuponcode_order);
    if(mysqli_num_rows($query_sending)>0){
        while($cuponcode_data_order = mysqli_fetch_assoc($query_sending_order)){

            if($cuponcode_data_order['order_item_type'] == 'coupon'){

                // echo $cuponcode_data_order['post_title']. "  ". $cuponcode_data['ID'];
                $cupon_id = $cuponcode_data['ID']; $cupon_code_order= $cuponcode_data['order_item_name']; $cupon_order_id = $cuponcode_data['order_id'];
                // DATA SEND INTO CUPON REFERRAL
                $sql_data_send = "INSERT INTO `cupon_order_use` (`id`, `coupon_name`, `coupon_count`, `coupon_order_id`) VALUES ('1', 'test30', '2', '1234');";
                $data_send = mysqli_query($server_connect, $sql_data_send);
                if($data_send){
                    echo "done<br>";
                }
            }
        }
    }
}

?>