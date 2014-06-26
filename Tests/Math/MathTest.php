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
        require_once('/home/travis/build/fahimilyas/phpmath/src/FIMath.php');
        
        $result = FIMath::add(9,3);
        $this->assertEquals($result, 12);
    }
    public function testSubtract()
    {
        require_once('/home/travis/build/fahimilyas/phpmath/src/FIMath.php');
        
        $result = FIMath::subtract(9,3);
        $this->assertEquals($result, 6);
    }
}

?>
