<?php
require "../vendor/autoload.php";

use JsonSchema\Validator;

$validator = new Validator();
var_dump($validator);
$validator->check(json_decode('{"id":"1", "b":2}'), json_decode(file_get_contents("../schema/schema.json")));

if ($validator->isValid()) {
    var_dump(111);
} else {
    var_dump($validator->getErrors());
}
