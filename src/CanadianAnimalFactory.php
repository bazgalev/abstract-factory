<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 23:06
 */

namespace App;


use App\Animals\Canadian\BrantaBernicla;
use App\Animals\Canadian\Grizzly;
use App\Animals\Canadian\Wolf as CanadianWolf;
use App\Interfaces\AnimalFactory;
use App\Interfaces\Animals\Bear;
use App\Interfaces\Animals\Bird;
use App\Interfaces\Animals\Wolf;

/**
 * Class CanadianAnimalFactory
 * @package App
 */
class CanadianAnimalFactory implements AnimalFactory
{
    /**
     * @return Wolf
     */
    public function createWolf(): Wolf
    {
        return new CanadianWolf();
    }

    /**
     * @return Bear
     */
    public function createBear(): Bear
    {
        return new Grizzly();
    }

    /**
     * @return Bird
     */
    public function createBird(): Bird
    {
        return new BrantaBernicla();
    }
}