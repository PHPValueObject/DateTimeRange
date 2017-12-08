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

    public function getStart() : \DateTimeImmutable
    {
        return $this->start;
    }

    public function getEnd() : \DateTimeImmutable
    {
        return $this->end;
    }
}
