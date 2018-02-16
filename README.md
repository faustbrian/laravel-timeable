#  Laravel Timeable

[![Build Status](https://img.shields.io/travis/faustbrian/Laravel-Timeable/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Laravel-Timeable)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/laravel-timeable.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Laravel-Timeable.svg?style=flat-square)](https://github.com/faustbrian/Laravel-Timeable/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Laravel-Timeable.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Laravel-Timeable)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-timeable
```

## Usage

### Setup a Model
``` php
<?php

namespace App;

use BrianFaust\Timeables\HasTimesTrait;
use BrianFaust\Timeables\Interfaces\HasTimes;
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

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
