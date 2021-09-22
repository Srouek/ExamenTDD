<?php declare(strict_types=1);

class DecimalToRoman{

    public static function decimalToRoman(int $number):string{

        $romanNumber = "";
        $quatre = "IV";
        
        for ($i=0; $i < $number; $i++) { 
            if($i <= 3){
                $romanNumber = $romanNumber."I";
            }
            $romanNumber = preg_replace('/^(I){4}/', $quatre,$romanNumber);
        }
        //if($i == 4) $romanNumber = "IV";
        if($i == 5) $romanNumber = "V";
        if($i == 6) $romanNumber = "VI";
        if($i == 7) $romanNumber = "VII";
        if($i == 8) $romanNumber = "VIII";
        if($i == 9) $romanNumber = "IX";
        if($i == 10) $romanNumber = "X";
        return $romanNumber;
        
        

        return $romanNumber;
    }

}