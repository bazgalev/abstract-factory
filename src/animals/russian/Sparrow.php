<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 22:56
 */

namespace App\Animals\Russian;


use App\Interfaces\Animals\Bird;

class Sparrow implements Bird
{
    public function makeSound(): void
    {
        echo 'Воробей: чик-чирик' . PHP_EOL;
    }
}