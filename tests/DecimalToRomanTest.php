<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DecimalToRomanTest extends TestCase{
    public function testDecimalToRoman():void{
        $this->assertEquals("", DecimalToRoman::decimalToRoman(0));
    }
}