#  Laravel Timeable

[![Build Status](https://img.shields.io/travis/artisanry/Timeable/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Timeable)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/timeable.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Timeable.svg?style=flat-square)](https://github.com/artisanry/Timeable/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Timeable.svg?style=flat-square)](https://packagist.org/packages/artisanry/Timeable)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/timeable
```

## Usage

### Setup a Model
``` php
<?php

namespace App;

use Artisanry\Timeables\HasTimesTrait;
use Artisanry\Timeables\Interfaces\HasTimes;
use Illuminate\Database\Eloquent\Model;

class Store extends Model implements HasTimes
{
    use HasTimesTrait;
}
```

``` php
$model->addTime('Monday', '08:00', '18:00');
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
