<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 22:30
 */

namespace App\Interfaces;


use App\Interfaces\Animals\Bear;
use App\Interfaces\Animals\Bird;
use App\Interfaces\Animals\Wolf;

interface AnimalFactory
{
    /**
     * @return Wolf
     */
    public function createWolf(): Wolf;

    /**
     * @return Bear
     */
    public function createBear(): Bear;

    /**
     * @return Bird
     */
    public function createBird(): Bird;
}