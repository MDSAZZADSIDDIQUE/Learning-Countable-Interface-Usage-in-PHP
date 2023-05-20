<?php
class Foods implements IteratorAggregate, Countable
{
    private $foods;
    function __construct()
    {
        $this->foods = array();
    }

    function addFood($food)
    {
        array_push($this->foods, $food);
    }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->foods);
    }

    function count(): int
    {
        return count($this->foods);
    }
}

$foods = new Foods();

$foods->addFood("Apples");
$foods->addFood("Pears");

echo count($foods);
