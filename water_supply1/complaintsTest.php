<?php
declare(strict_types=1);
require_once 'complaintspage.php';
use PHPUnit\Framework\TestCase;
//require_once 'PHPUnit\TestCase.php';
class complaintsTest extends TestCase {
    protected $object;
    protected function setUp(): void {
        $this->object = new complaintspage;
    }
    protected function tearDown(): void {

    }
    public function testTestcomplaints1() {
        $name = 'ramkumar';
        $email = 'ramkumar@gmail.com';
		$password = '12345678';
        $this->assertEquals(1,$this->object->testcomplaints($name, $email, $password));
    }
    public function testTestcomplaints2() {
        $name = 'ramkumar';
        $email = 'ramkumar@gmail.com';
		$password = '123456781';
        $this->assertEquals(1,$this->object->testcomplaints($name, $email, $password));
    }
}