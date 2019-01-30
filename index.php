<?php
    
    $MerchantRequestID=$_POST["MerchantRequestID"];
    $CheckoutRequestID=$_POST["CheckoutRequestID"];
    $ResultCode=$_POST["ResultCode"];
    $ResultDesc=$_POST["ResultDesc"];

    header('Content-type: application/json');
    echo json_encode( $ResultDesc );
    
?>