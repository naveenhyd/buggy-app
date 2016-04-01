<?php

/**
 * MathTest test class
 */

namespace BuggyAppTest;

class MathTest extends \PHPUnit_Framework_TestCase {

    public function testAddNumbers() {
        $obj = new \BuggyApp\Math();
        $this->assertEquals(5, $obj->Sum(2, 3));
    }

}
