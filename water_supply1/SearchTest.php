<?php
declare(strict_types=1);
require_once 'Searchpage.php';
use PHPUnit\Framework\TestCase;
//require_once 'PHPUnit\TestCase.php';
class SearchTest extends TestCase {
    protected $object;
    protected function setUp(): void {
        $this->object = new Searchpage;
    }
    protected function tearDown(): void {

    }
    public function testTestSearch1() {
        $area_name = 'villapuram';
        $city = 'madurai';
		$supply_date='21/04/2019';
		$supply_time='4.30pm';
        $this->assertEquals(1,$this->object->testSearch($area_name, $city, $supply_date, $supply_time));
    }
    public function testTestSearch2() {
		$area_name = 'thirunagar';
        $city = 'madurai';
		$supply_date='21/04/2019';
		$supply_time='4.30pm';
        
        $this->assertEquals(1,$this->object->testSearch($area_name, $city, $supply_date, $supply_time));
    }
}