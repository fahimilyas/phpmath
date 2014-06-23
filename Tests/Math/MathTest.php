<?php
/**
* Tests the form like encoder
*
* @author Kévin Dunglas <dunglas@gmail.com>
*/
class MathTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        require_once('../../src/FIMath.php');
        
        $result = FIMath::add(9,3);
        $this->assertEquals($result, 12);
    }
}

?>
