<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 22:50
 */

namespace App;


use App\Animals\Russian\BrownBear;
use App\Animals\Russian\Sparrow;
use App\animals\russian\Wolf;
use App\Interfaces\AnimalFactory;
use App\Interfaces\Animals\Bear;
use App\Interfaces\Animals\Bird;
use App\Interfaces\Animals\Wolf as WolfInterface;

/**
 * Class RussianAnimalFactory
 * @package App
 */
class RussianAnimalFactory implements AnimalFactory
{
    /**
     * @return WolfInterface
     */
    public function createWolf(): WolfInterface
    {
        return new Wolf();
    }

    /**
     * @return Bear
     */
    public function createBear(): Bear
    {
        return new BrownBear();
    }

    /**
     * @return Bird
     */
    public function createBird(): Bird
    {
        return new Sparrow();
    }
}