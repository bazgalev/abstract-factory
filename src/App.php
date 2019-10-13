<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 12:59
 */

namespace App;


class App
{
    public function run(): void
    {
        $forest = new Forest(new RussianAnimalFactory());
        $forest->init();
        $forest->listen();

        echo PHP_EOL;
        $forest->setFactory(new CanadianAnimalFactory());
        $forest->listen();
    }
}