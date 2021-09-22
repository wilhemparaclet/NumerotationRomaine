<?php declare(strict_types=1);

class Exo
{
    public function decimalToRoman($decimal){
        $decimal = 0;
        if ($decimal > 0) {
            $decicmal_array = array(
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
            foreach ($decicmal_array as $int => $roman) {
                while ($decimal >= $int) {
                    $roman_num .= $roman;
                    $decimal = $decimal - $int;
                }
            }
        } else {
            throw new \InvalidArgumentException("Value MUST BE greater than 0");
        }
        return $roman_num;
    }
}
