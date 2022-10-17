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
            "ianlow/php-slideshow": "*"
        }
    }
```
or run the following command:

    php composer.phar require ianlow/php-slideshow

## Usage Example

```php

$obj1 = new Ianlow\PhpSlideshow\PhpSlideshow();

$obj1->main();

```

## Change Log

Please see [CHANGELOG](CHANGELOG.md) for more information on the recent changes.

## Contribute

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- Ian Low (ianlow27@gmail.com)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
