<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 22:32
 */

namespace App;


use App\Interfaces\AnimalFactory;
use App\Interfaces\Animals\Animal;

/**
 * Class Forest
 * @package App
 */
class Forest
{
    /**
     * @var AnimalFactory
     */
    private $animalFactory;

    /**
     * @var \SplObjectStorage
     */
    private $animals;

    public function __construct(AnimalFactory $af)
    {
        $this->animalFactory = $af;
        $this->animals = new \SplObjectStorage();
    }

    public function init(int $bears = 2, int $wolfs = 2, int $birds = 23): void
    {
        $this->animals->removeAll($this->animals);  //clear collection

        for ($i = 0; $i < $bears; $i++) {
            $this->animals->attach($this->animalFactory->createBear());
        }

        for ($i = 0; $i < $wolfs; $i++) {
            $this->animals->attach($this->animalFactory->createWolf());
        }

        for ($i = 0; $i < $birds; $i++) {
            $this->animals->attach($this->animalFactory->createBird());
        }
    }

    public function listen(): void
    {
        /** @var Animal $animal */
        foreach ($this->animals as $animal) {
            $animal->makeSound();
        }
    }

    public function setFactory(AnimalFactory $af)
    {
        $this->animalFactory = $af;
        $this->init();  //reinit forest
    }
}