<?php
namespace PHPValueObject\DateTimeRange;

class DateTimeRangeSplitter
{
    /**
     * @param DateTimeRange $dateTimeRange
     * @param \DateInterval $dateInterval
     * @return DateTimeRange[]
     */
    public function split(DateTimeRange $dateTimeRange, \DateInterval $dateInterval) : array
    {
        $ranges = [];
        /** @var \DateTimeImmutable $date */
        foreach (new \DatePeriod($dateTimeRange->getStart(), $dateInterval, $dateTimeRange->getEnd()) as $date) {
            $end = $date->add($dateInterval);
            if ($end > $dateTimeRange->getEnd()) {
                $end = $dateTimeRange->getEnd();
            }

            $ranges[] = new DateTimeRange($date, $end);
        };

        return $ranges;
    }
}
