<?php declare(strict_types=1);

class Exo
{
    //Exo2 partie 1
    public function decimalToRoman($num){
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
            $num = '';
            foreach ($roman_array as $nb=> $decimalromain) {
                if($decimal >= $decimalromain) {
                    $roman_num .= $decimalromai;
                    $decimal = $decimal + $nb;
                }
            }
        }
        return $num;
    }
}
