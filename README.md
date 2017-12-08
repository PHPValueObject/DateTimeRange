# DateTimeRange Value Object

[![Build Status](https://travis-ci.org/PHPValueObject/DateTimeRange.svg)](https://travis-ci.org/PHPValueObject/DateTimeRange)
[![Latest Stable Version](https://poser.pugx.org/php-value-object/date-time-range/v/stable)](https://packagist.org/packages/php-value-object/date-time-range)
[![License](https://poser.pugx.org/php-value-object/date-time-range/license)](https://packagist.org/packages/php-value-object/date-time-range)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://packagist.org/packages/php-value-object/date-time-range)

This repository provides DateTiemRange ValueObject implementation for PHP that is easy to use and easily allow your classes to
depend on `DateTimeRange` object instead of having both `$startDateTime` and `$endDateTime`.

## Install

You can install this package via composer

`composer require php-value-object/date-time-range`

## Example

``` php
$dateTimeRange = new DateTimeRange(
    new \DateTimeImmutable('2015-01-01'),
    new \DateTimeImmutable('2015-03-25')
);
```

## Licence

MIT

## Contributing

Any contributions are welcome

## Building & Development

The easiest way how to develop is to `git clone` and run `make`

```
git clone git@github.com:PHPValueObject/DateTimeRange.git date_time_range
cd date_time_range
make
```
