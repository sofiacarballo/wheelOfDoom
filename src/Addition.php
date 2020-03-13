<?php
namespace App;
final class Addition
{
        public function addName($coders)
        {
            array_push($coders, 'Javier Marmol');
            return print_r ($coders);
        }
}