<?php declare(strict_types=1);

class Exo
{
    //Exo2 partie 1
    public function decimalToRoman($roman_num){
        $decimal = 0;
        while($decimal > 0) {
            $roman_array = array(
                1000 => 'M',
                900 => 'CM',
                500 => 'D',
                100 => 'C',
                90 => 'XC',
                50 => 'L',
                40 => 'XL',
                10 => 'X',
                9 => 'IX',
                5 => 'V',
                4 => 'IV',
                1 => 'I',
            );
            $roman_num = '';
            if($decimal >= $roman) {
                $roman_num .= $roman;
                $decimal = $decimal - $roman;
            }
        }
        return $roman_num;
    }
}
