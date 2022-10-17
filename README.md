README
======

This PHP code creates a presentation slideshow from an input text file.

## Compatibility

{- Tested up to PHP 7, should be compatible with PHP 5.3 or above -}

## Installation

### Composer
Add these lines to your composer.json:
```json
    {
        "require": {
            "ianl28/php-slideshow": "*"
        }
    }
```
or run the following command:

    php composer.phar require ianl28/php-slideshow

## Usage Example

```php

$obj1 = new Ianl28\PhpSlideshow\PhpSlideshow();

$obj1->main();

```

## Change Log

Please see [CHANGELOG](CHANGELOG.md) for more information on the recent changes.

## Contribute

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- Ian Low (ianlow28@gmail.com)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
