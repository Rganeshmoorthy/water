<?php
declare(strict_types=1);
require_once 'Loginpage.php';
use PHPUnit\Framework\TestCase;
//require_once 'PHPUnit\TestCase.php';
class LoginTest extends TestCase {
    protected $object;
    protected function setUp(): void {
        $this->object = new Loginpage;
    }
    protected function tearDown(): void {

    }
    public function testTestlogin1() {
        $username = 'vaishnavi';
        $password = 'vaishu*123';
        $this->assertEquals(1,$this->object->testlogin($username, $password));
    }
    public function testTestlogin2() {
        $username = 'vaishnavi';
        $password = 'vaishu';
        $this->assertEquals(1,$this->object->testlogin($username, $password));
    }
}
