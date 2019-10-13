<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 23:03
 */

namespace App\Animals\Canadian;


class Wolf implements \App\Interfaces\Animals\Wolf
{
    public function makeSound(): void
    {
        echo 'Wolf: awwoooooo' . PHP_EOL;
    }
}