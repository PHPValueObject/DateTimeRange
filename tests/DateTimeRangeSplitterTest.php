<?php

namespace PHPValueObject\DateTimeRange\Tests;

use PHPUnit\Framework\TestCase;
use PHPValueObject\DateTimeRange\DateTimeRange;
use PHPValueObject\DateTimeRange\DateTimeRangeSplitter;

class DateTimeRangeSplitterTest extends TestCase
{
    public function testSplit()
    {
        $dateTimeRange = new DateTimeRange(
            new \DateTimeImmutable('2015-01-01'),
            new \DateTimeImmutable('2015-03-25')
        );

        $splitter = new DateTimeRangeSplitter();
        $dateRanges = $splitter->split($dateTimeRange, new \DateInterval('P1M'));

        $this->assertEquals(new \DateTimeImmutable('2015-01-01'), $dateRanges[0]->getStart());
        $this->assertEquals(new \DateTimeImmutable('2015-02-01'), $dateRanges[0]->getEnd());

        $this->assertEquals(new \DateTimeImmutable('2015-02-01'), $dateRanges[1]->getStart());
        $this->assertEquals(new \DateTimeImmutable('2015-03-01'), $dateRanges[1]->getEnd());

        $this->assertEquals(new \DateTimeImmutable('2015-03-01'), $dateRanges[2]->getStart());
        $this->assertEquals(new \DateTimeImmutable('2015-03-25'), $dateRanges[2]->getEnd());
    }
}

