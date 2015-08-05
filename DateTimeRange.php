<?php

namespace PHPValueObject\DateTimeRange;

class DateTimeRange
{
    /**
     * @var \DateTimeInterface
     */
    private $from;

    /**
     * @var \DateTimeInterface
     */
    private $to;

    public function __construct(\DateTimeInterface $from, \DateTimeInterface $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTo()
    {
        return $this->to;
    }
}
