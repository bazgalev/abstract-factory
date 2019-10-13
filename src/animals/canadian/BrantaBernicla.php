<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 23:05
 */

namespace App\Animals\Canadian;


use App\Interfaces\Animals\Bird;

class BrantaBernicla implements Bird
{
    public function makeSound(): void
    {
        echo 'BrantaBernicla: some bird sound like kurliiik' . PHP_EOL;
    }
}