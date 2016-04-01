<?php

/**
 * Mathamatical operations class
 */

namespace BuggyApp;

class Math {

    /**
     * Constructor
     */
    function __construct() {
        
    }

    /**
     * Calculate sum of two numbers
     * @param int $a
     * @param int $b
     * @return int
     */
    public function Sum($a, $b) {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException;
        }
        return $a + $b;
    }

    /**
     * Calculate sum of array of numbers
     * @param type $numbers
     * @return int
     */
    public function SumArray($numbers) {
        if (count($numbers) > 0)
            return array_sum($numbers);
        else
            return 0;
    }

}
