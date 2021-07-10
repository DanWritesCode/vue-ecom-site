<?php
// Some PHP debug lines here
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

// An isset a day makes the error go away
if (!isset($request) || !isset($request["sliced"]))
  renderError("Failure.");

if ($request["type"] == "POST") {
  if (strlen($request["input"]["paypalOrderId"]) > 0) {

    $shipping = $request["input"]["shipping"];
    validate([$request["input"]["paypalOrderId"] => "string", $shipping["name"] => "string", $shipping["email"] => "email",
      $shipping["addressLine1"] => "string", $shipping["city"] => "string", $shipping["zip"] => "string", $shipping["country"] => "string"]);

    require_once("classes/PaymentHelper.php");

    $ph = new PaymentHelper($request["input"]["cart"], $shipping, $conn);

    $result = $ph->purchaseWithPayPal($request["input"]["paypalOrderId"]);
    if ($result == "PAYMENT_SUCCESS")
      die("{\"success\": true}");
    else
      renderError($result);

  } else {
    renderError("No paypalOrderId");
  }
}
