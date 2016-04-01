<?php

/**
 * MathTest test class
 */

namespace BuggyAppTest;

class MathTest extends \PHPUnit_Framework_TestCase {

    public function Setup() {
        $this->math = new \BuggyApp\Math();
    }

    public function inputNumbers() {
        return [
            [2, 2, 4],
            [2.5, 2.5, 5],
            [-3, 1, -2],
            [-9, -9, -18],
        ];
    }

    /**
     * 
     * @param type $a
     * @param type $b
     * @param type $sum
     * @dataProvider inputNumbers
     */
    public function testAddNumbers($a, $b, $sum) {
        $this->assertEquals($sum, $this->math->Sum($a, $b));
    }

}
