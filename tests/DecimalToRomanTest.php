<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DecimalToRomanTest extends TestCase{
    public function testDecimalToRomanFor0():void{
        $this->assertEquals("", DecimalToRoman::decimalToRoman(0));
    }
    public function testDecimalToRomanFor1():void{
        $this->assertEquals("I", DecimalToRoman::decimalToRoman(1));
    }
    public function testDecimalToRomanFor2():void{
        $this->assertEquals("II", DecimalToRoman::decimalToRoman(2));
    }
    public function testDecimalToRomanFor3():void{
        $this->assertEquals("III", DecimalToRoman::decimalToRoman(3));
    }
    public function testDecimalToRomanFor4():void{
        $this->assertEquals("IV", DecimalToRoman::decimalToRoman(4));
    }
    public function testDecimalToRomanFor5():void{
        $this->assertEquals("V", DecimalToRoman::decimalToRoman(5));
    }
    public function testDecimalToRomanFor6():void{
        $this->assertEquals("VI", DecimalToRoman::decimalToRoman(6));
    }
    public function testDecimalToRomanFor7():void{
        $this->assertEquals("VII", DecimalToRoman::decimalToRoman(7));
    }
    public function testDecimalToRomanFor8():void{
        $this->assertEquals("VIII", DecimalToRoman::decimalToRoman(8));
    }
    public function testDecimalToRomanFor9():void{
        $this->assertEquals("IX", DecimalToRoman::decimalToRoman(9));
    }
    public function testDecimalToRomanFor10():void{
        $this->assertEquals("X", DecimalToRoman::decimalToRoman(10));
    }
}