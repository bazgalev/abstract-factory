<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 23:02
 */

namespace App\Animals\Canadian;


use App\Interfaces\Animals\Bear;

class Grizzly implements Bear
{
    public function makeSound(): void
    {
        echo 'Grizzly: bbbrrrr' . PHP_EOL;
    }
}