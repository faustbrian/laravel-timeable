#  Laravel Timeable

I would appreciate you taking the time to look at my [Patreon](https://www.patreon.com/faustbrian) and considering to support me if I'm saving you some time with my work.

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

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
