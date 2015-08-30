<?php

namespace PHPValueObject\DateTimeRange;

class DateTimeRange
{
    /**
     * @var \DateTimeImmutable
     */
    private $start;

    /**
     * @var \DateTimeImmutable
     */
    private $end;

    public function __construct(\DateTimeImmutable $start, \DateTimeImmutable $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getEnd()
    {
        return $this->end;
    }
}
