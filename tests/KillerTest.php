<?php
use PHPUnit\Framework\TestCase;
use App\Killer;
final class KillerTest extends TestCase
{
    public function testDeleteCoderFromTheList()
    {
        $coders = ['Kevin Hidalgo','Sofia Carballo','Jose Ortega','Johanna Sanchez'];
        $deletethiscoder = 'Jose Ortega';
        $killer = new Killer;
        $dead = $killer->deleteName($coders, $deletethiscoder);
        $this->assertContains($deletethiscoder, $coders) ;
    }
}