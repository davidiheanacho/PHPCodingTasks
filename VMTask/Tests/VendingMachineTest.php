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

    /**
     * @dataProvider dataVendingMachine
     */
  public function testValidateSum(string $sum , int $expected) {

      $result = calculateTotal($sum);

      $this->assertEquals($expected, $result);

  }

  public function dataVendingMachine(): array {
      return [
          ["1e 2e 50c", 350],
          ["10c 2e 1c", 211],
          ["1c 5c 1e", 106],
          ["5e 50c 1c", 551]
      ];
  }

    /**
     * @dataProvider dataChange
     */
  public function testCalculateChange(int $leftover, string $expected) {
      $coins = [
          '5e' => 500,
          '2e' => 200,
          '1e' => 100,
          '50c' => 50,
          '20c' => 20,
          '10c' => 10,
          '5c' => 5,
          '2c' => 2,
          '1c' => 1,
      ];
      $result = calculateChange($leftover, $coins);

      $this->assertSame($expected, $result);

  }

  public function dataChange() :array {
      return [
          [60, "50c 10c"],
          [4, "2x2c"],
      ];

  }

}