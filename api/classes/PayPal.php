<?php
require_once("config.php");
require_once("PaymentHelper.php");
class PayPal {
        private $url;

        function __construct() {
            if(PaymentHelper::$sandbox)
                $this->url = "api.sandbox.paypal.com";
            else
                $this->url = "api.paypal.com";

        }

        public function getAccessToken() {
            // Renew token!
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://".$this->url."/v1/oauth2/token");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json", "Accept-Langauge: en_US"]);
            curl_setopt($ch, CURLOPT_USERPWD, PAYPAL_CLIENT_SECRET);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
            $res = curl_exec($ch);
            //echo $res;
            $newTokenDesc = json_decode($res);
            $at = $newTokenDesc->access_token;
            curl_close($ch);
            return $at;
        }

        public function getOrder($orderId) {

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://".$this->url."/v2/checkout/orders/" . $orderId);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json", "Authorization: Bearer " . $this->getAccessToken()]);

            $initPP = curl_exec($ch);
            $res = json_decode($initPP, true);
            curl_close($ch);

            return $res;
        }

        public function capturePayment($orderId) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://".$this->url."/v2/checkout/orders/" . $orderId. "/capture");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json", "Authorization: Bearer " . $this->getAccessToken()]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "{}");
            $initPP = curl_exec($ch);
            $res = json_decode($initPP, true);
            curl_close($ch);

            return $res;
        }

        public function refund($tid) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://".$this->url."/v1/payments/sale/" .$tid. "/refund");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json", "Authorization: Bearer " .$this->getAccessToken()]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "{}");
            $res = curl_exec($ch);
            $action = json_decode($res);
            curl_close($ch);
        }

        public function getPaypalFees($tid) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://".$this->url."/v1/payments/sale/" .$tid);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer " .$this->getAccessToken()]);
            $res = curl_exec($ch);

            $ppReply = json_decode($res, true);

            if($ppReply["state"] == "completed") {
                return $ppReply["transaction_fee"]["value"];
            }
        }
    }
