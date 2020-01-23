<?php

namespace App\Search;

use DateTimeInterface;

class PublicationDateRangeParameter implements Parameter
{
    /**
     * @var DateTimeInterface
     */
    protected $start;

    /**
     * @var DateTimeInterface
     */
    protected $end;

    public function __construct(DateTimeInterface $start, DateTimeInterface $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function getStart(): DateTimeInterface
    {
        return $this->start;
    }

    public function getEnd(): DateTimeInterface
    {
        return $this->end;
    }
}
