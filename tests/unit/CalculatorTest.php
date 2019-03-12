<?php
namespace App\Util\Tests;

use Codeception\Test\Unit;
use App\Util\Calculator;

class CalculatorTest extends Unit
{
    public function testCanCreateObject()
    {
        // Arrange
        $calculator = new Calculator();

        // Act

        // Assert
        $this->assertNotNull($calculator);
    }

    public function testAddOneAndOne()
    {
        // Arrange
        $calculator = new Calculator();
        $num1 = 1;
        $num2 = 1;
        $expectedResult = 2;

        // Act
        $result = $calculator->add($num1, $num2);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }
}