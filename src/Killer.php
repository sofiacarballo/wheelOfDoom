<?php
namespace App;
final class Killer
{
    public function deleteName ($coders, $deletethiscoder)
    {
        print_r($coders);
        print_r("Coder Delete Dead is: ". $deletethiscoder."\n");
        $alive_coders = array_diff($coders, array($deletethiscoder));
        print_r($alive_coders);
        return $alive_coders;
    }
}