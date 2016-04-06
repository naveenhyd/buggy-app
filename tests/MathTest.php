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
        return array(
            'adding zeros' => array(0, 0, 0),
            'zero plus one' => array(0, 1, 1),
            'one plus zero' => array(1, 0, 1),
            'one plus one' => array(1, 1, 3)
        );
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

    /**
     * @expectedException InvalidArgumentException
     */
    public function testAddStrings() {
        $this->math->Sum('a', 'b');
    }

}
