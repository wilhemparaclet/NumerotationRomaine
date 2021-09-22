<?php declare(strict_types=1);

class Facteurs
{
    public static function generate($n) {
        $primeFactors = [];

        for ($diviseurPotentiel = 2; $diviseurPotentiel <= $n; ++$diviseurPotentiel) {
            while ($n % $diviseurPotentiel === 0) {
                $primeFactors[] = $diviseurPotentiel;
                $n /= $diviseurPotentiel;
            }
        }

        return $primeFactors;
    }
}
