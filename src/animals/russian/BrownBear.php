<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 22:55
 */

namespace App\Animals\Russian;


use App\Interfaces\Animals\Bear;

class BrownBear implements Bear
{

    public function makeSound(): void
    {
        echo 'Бурый медведь: рРРрРРРрррР' . PHP_EOL;
    }
}