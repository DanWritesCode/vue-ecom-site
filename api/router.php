<?php
// All requests hit here.

header("Content-Type: application/json");

$apiVersion = "production";

/* Function: renderError()
 * Author: Chearful / Thomas B.
 * Description: Prints an error, sends an HTTP response code, terminates the API request with die()
 */
function renderError($error, $code=400) {
  http_response_code($code);
  die(json_encode(array("message" => $error)));
}

/* Function: validate()
 * Author: Chearful / Thomas B.
 * Description: Generic data validation function, for use in processing/validating HTTP payloads (POST data, etc.)
 * Param: $params: an array of parameters to validate
 *        array key: the data to validate
 *        array pass: one of the provided validation parameters, optionally separated by '|'
 * Output: renders an error and halts application if one of the fields doesn't pass validation
 * Returns: nothing
 */
function validate($params) {
  foreach($params as $key => $value) {
    $validators = explode("|", $value);
    if(is_null($key)) renderError("Field being validated is null");
    foreach($validators as $validator) {
      if($validator == "username") {
        if(strlen($key) < 2 || strlen($key) > 32 || !ctype_alnum(str_replace("_", "", $key))) renderError("Invalid username (alphanumeric, 2-32 chars)");
      }
      else if($validator == "bool" || $validator == "boolean") {
        if($key != true && $key != false) renderError("Expecting boolean but got something else");
      }
      else if($validator == "string") {
        if(empty($key) || !is_string($key) && !is_numeric($key)) renderError("Expecting string but got something else for " . $key);
      }
      else if($validator == "alnum") {
        if(!ctype_alnum($key)) renderError("Field must be alphanumeric");
      }
      else if($validator == "alnumspace") {
        if(!ctype_alnum(str_replace(" ", "", $key))) renderError("Field must be alphanumeric");
      }
      else if($validator == "int") {
        if(!is_int($key)) renderError("Expecting int but got something else");
      }
      else if($validator == "password") {
        if(strlen($key) < 3 || strlen($key) > 128) renderError("Password too long or too short");
      }
      else if($validator == "email") {
        if(!filter_var($key, FILTER_VALIDATE_EMAIL)) renderError("Invalid email");
      }
      else if($validator == "money") {
        if(!is_numeric($key)) renderError("Invalid money amount");
        if($key < 1) renderError("Money is less than $1");
      }
      else renderError("Unknown validation check (" .$validator.")");
    }
  }
}

$request["type"] = $_SERVER["REQUEST_METHOD"];
$request["ip"] = $_SERVER["HTTP_CF_CONNECTING_IP"];
$request["uri"] = $_SERVER["REQUEST_URI"];
$request["sliced"] = explode("/", $_SERVER["REQUEST_URI"], 10);

require_once("database.php");
if($request["type"] != "GET") {
  $request["input"] = json_decode(file_get_contents("php://input"), true);
}
$path = $request["sliced"][1];
switch ($path) {
  case "purchase":
    require("routes/purchase.php");
    break;
  default:
    renderError("Unable to route request", 404);
}


