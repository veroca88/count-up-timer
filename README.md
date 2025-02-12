# Allow you to track elapsed time with precision, making it ideal for task tracking, activity monitoring

[![Latest Version on Packagist](https://img.shields.io/packagist/v/veroca88/count-up-timer.svg?style=flat-square)](https://packagist.org/packages/veroca88/count-up-timer)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/veroca88/count-up-timer/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/veroca88/count-up-timer/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/veroca88/count-up-timer/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/veroca88/count-up-timer/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/veroca88/count-up-timer.svg?style=flat-square)](https://packagist.org/packages/veroca88/count-up-timer)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require veroca88/count-up-timer
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="count-up-timer-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="count-up-timer-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="count-up-timer-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$countUpTimer = new Veroca88\CountUpTimer();
echo $countUpTimer->echoPhrase('Hello, Veroca88!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Veronica](https://github.com/veroca88)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
