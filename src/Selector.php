<?php
namespace App;

final class Selector
{

    public function getRandomName($coders)
    {
        return $coders[array_rand($coders,1)];
    }
}