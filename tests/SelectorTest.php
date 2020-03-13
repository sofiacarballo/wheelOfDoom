<?php
use PHPUnit\Framework\TestCase;
use App\Selector;

final class SelectorTest extends TestCase
{
     
    public function testSelectCoderRandomly()
    {
            $coders = ['Kevin Hidalgo','Sofia Carballo','Jose Ortega','Johanna Sanchez'];
            $selector = new selector();
            $selected = $selector->getRandomName($coders);
            $this->assertTrue(in_array($selected, $coders)); 
            echo $selected;
    }    
    
}