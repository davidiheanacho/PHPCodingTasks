<?php


namespace Tests;


use Exception;
use PHPUnit\Framework\TestCase;

class VendingMachineTest extends TestCase
{
  public function testValidateCoins() {
// Arrange
      $inputcoins = "1d";

      // Assert - compare the output to expected one
      $this->expectException(Exception::class);
      $this->expectExceptionMessage("Cannot accept money");
  // Act - call the fnx
      calculateTotal($inputcoins);



  }

  public function testValidateSum() {

      $sum = "1e 2e 50c";
      $result = calculateTotal($sum);

      $this->assertEquals(350, $result);

  }
}
