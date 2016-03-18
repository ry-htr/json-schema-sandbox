<?php
use JsonSchema\Validator;

class TestTest extends PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
        $validator = new Validator();
        $validator->check(json_decode('{"a":"1", "b":2}'), json_decode(file_get_contents("schema/schema.json")));

        $this->assertTrue($validator->isValid());
    }
}
