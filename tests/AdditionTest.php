<?php
use PHPUnit\Framework\TestCase;
use App\Addition;
final class AdditionTest extends TestCase
{
    public function testAddOneCoderToTheList()
    {
        $coders = ['Kevin Hidalgo','Sofia Carballo','Jose Ortega','Johanna Sanchez'];
        $addition = new addition();
        $alive = $addition->addName($coders);
        $this->assertTrue(in_array($alive, $coders));
    }
}