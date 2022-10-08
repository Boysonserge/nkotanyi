<?php


namespace App\pkg;


class PaymentApi
{
    public function payment_api($transactionId,$amount,$telephoneNumber){
        $url = "https://opay-api.oltranz.com/opay/paymentrequest";
        $content = '{
                "telephoneNumber" : "'.$telephoneNumber.'",
                "amount" : "'.$amount.'",
                "organizationId" : "8a74810968e261260168f08a378c0002",
                "description" : "description",
                "callbackUrl" : "https://3c3d-41-216-115-26.eu.ngrok.io/api/callback",
                "transactionId" : "'.$transactionId.'"
            }';

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $content,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
