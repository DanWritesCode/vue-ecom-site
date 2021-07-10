<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
require_once("PayPal.php");

class PaymentHelper {
  // MASTER SANDBOX VARIABLE. DONT FORGET TO CHANGE BACK.
  static $sandbox = false;

  private $conn;
  private $cart;
  private $shipping;
  private $amount;
  private $tid;

  private $paypalEmail = null;

  public function __construct($cart, $shipping, $conn) {
    $this->cart = $cart;
    $this->shipping = $shipping;
    $this->conn = $conn;
  }


  public function getTID() {
    return $this->tid;
  }

  public function setTID($tid) {
    $this->tid = $tid;
  }

  public function getPayPalEmail() {
    return $this->paypalEmail;
  }


  public function purchaseWithPayPal($orderId) {
    $gaypal = new PayPal();

    $orderRes = $gaypal->getOrder($orderId);
    if ($orderRes["status"] != "APPROVED") {
      if ($orderRes["status"] == "COMPLETED") return "This order has already been marked as completed";
      mail(CONTACT_EMAIL, "(FAIL DEBUG) Purchase: " . $this->cart, "Hi, this is the payment helper.\n\nJust thought you might like to know that someone IS TRYING TO PURCHASE " . json_encode($this->cart) . " for $" . $this->amount . "!\n\nIf there's any problems, the following may be useful to you:\nGet order response: " . json_encode($orderRes) . "\n\nKind Regards,\nPayment Helper", "From: " + CONTACT_EMAIL);
      return "Order hasn't been marked as approved by PayPal (currently " . $orderRes["status"] . ")";
    }

    /* ADAPT OLD PAYPAL SMART BUTTONS */
    if (isset($orderRes["purchase_units"][0]["amount"]["currency_code"]) && !isset($orderRes["purchase_units"][0]["carts"][0]["unit_amount"]["currency_code"])) $orderRes["purchase_units"][0]["carts"][0]["unit_amount"]["currency_code"] = $orderRes["purchase_units"][0]["amount"]["currency_code"];
    if (isset($orderRes["purchase_units"][0]["amount"]["value"]) && !isset($orderRes["purchase_units"][0]["carts"][0]["unit_amount"]["value"])) $orderRes["purchase_units"][0]["carts"][0]["unit_amount"]["value"] = $orderRes["purchase_units"][0]["amount"]["value"];

    $amountPaid = floatval($orderRes["purchase_units"][0]["carts"][0]["unit_amount"]["value"]);

    $captureRes = $gaypal->capturePayment($orderId);

    if (isset($captureRes["name"]) && $captureRes["name"] == "UNPROCESSABLE_ENTITY") return "Your payment was declined by PayPal, your bank or your card issuer. Please make sure you provided PayPal with the information that matches your funding source.";
    if ($captureRes["status"] != "COMPLETED") return "Order hasn't been marked as completed by PayPal (currently " . $captureRes["status"] . "). Please contact us if you believe this to be in error.";
    if ($captureRes["purchase_units"][0]["payments"]["captures"][0]["status"] != "COMPLETED") return "Order capture payment hasn't been marked as completed by PayPal (currently " . $captureRes["status"] . "). Please contact us if you believe this to be in error.";
    if ($captureRes["purchase_units"][0]["payments"]["captures"][0]["amount"]["currency_code"] != "USD") return "Currency mismatch";
    if (floatval($captureRes["purchase_units"][0]["payments"]["captures"][0]["amount"]["value"]) != $amountPaid) return "Price mismatch";

    $this->tid = $captureRes["purchase_units"][0]["payments"]["captures"][0]["id"];
    $this->paypalEmail = $captureRes["payer"]["email_address"];

    mail(CONTACT_EMAIL, "New Purchase from " . $this->paypalEmail . "!", "Hi, this is the payment helper.\n\nJust thought you might like to know that " . $this->paypalEmail . " has purchased " . json_encode($this->cart) . " for $" . $amountPaid . " to be delivered to " . json_encode($this->shipping) . "!\n\nIf there's any problems, the following may be useful to you:\nGet order response: " . json_encode($orderRes) . "\n\nCapture order response: " . json_encode($captureRes) . "\n\nKind Regards,\nPayment Helper", "From: CONTACT_EMAIL");

    return "PAYMENT_SUCCESS";
  }

}
