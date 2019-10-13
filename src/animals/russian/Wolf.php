<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 22:58
 */

namespace App\Animals\Russian;


use App\Interfaces\Animals\Wolf as WolfInterface;

class Wolf implements WolfInterface
{
    public function makeSound(): void
    {
        echo 'Волк: АаааУУУуууу' . PHP_EOL;
    }
}