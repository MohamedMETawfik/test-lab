<?php
use PHPUnit\Framework\TestCase;

require './src/factorial.php';

class FactorialTest extends TestCase
{
    public function testfactorial() {
        $calc= new factorial;
        $testcase1= $calc -> factorial(0);
        $testcase2= $calc -> factorial(1);
        $testcase3= $calc -> factorial(5);
        $n = random_int (3,1000);
        $testcase4= $calc -> factorial($n);
        $testcase5= $calc -> factorial(-3);
        $testcase6= $calc -> factorial(1.5);
        $testcase7= $calc -> factorial(false);
        $testcase8= $calc -> factorial('abc');

        $this -> assertEquals (1,$testcase1);
        $this -> assertEquals (1,$testcase2);
        $this -> assertEquals (120,$testcase3);
        $this -> assertEquals ($calc -> factorial($n-1) * $n, $testcase4);
        $this -> assertEquals (null,$testcase5);
        $this -> assertEquals (null,$testcase6);
        $this -> assertEquals (null,$testcase7);
        $this -> assertEquals (null,$testcase8);
    }
}
?>