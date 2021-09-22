<?php declare(strict_types=1);

class DecimalToRoman{

    public static function decimalToRoman(int $number):string{

        $romanNumber = "";
        if($number <= 3){
            for ($i=0; $i < $number; $i++) { 
                if($i <= 3){
                    $romanNumber = $romanNumber."I";
                }
                
            }
            return $romanNumber;
        }
                
        
        if($number == 4) return "IV";
        if($number == 5) return "V";
        if($number == 6) return "VI";
        if($number == 7) return "VII";
        if($number == 8) return "VIII";
        if($number == 9) return "IX";
        if($number == 10) return "X";

        return $romanNumber;
    }

}