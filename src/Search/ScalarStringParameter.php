<?php

namespace App\Search;

abstract class ScalarStringParameter implements Parameter
{
    /**
     * @var string
     */
    protected $term;

    public function __construct(string $term)
    {
        $this->term = $term;
    }

    public function getTerm(): string
    {
        return $this->term;
    }
}
