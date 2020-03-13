# eveapi

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


This is a small package to connect to the eve online esi server.
This will support the OAuth 2 implementation for the esi client so you will get the full experience

If you want the full documentation of the api you can also see this website if your endpoint is not implented yet.
https://github.com/tkhamez/swagger-eve-php

We are working towards extensively holding ourselves to at least PSR-2 / PSR 4

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
src/
vendor/
```


## Install

Via Composer

``` bash
$ composer require zwarthoorn/eveapi
```

## Usage

``` php
$skeleton = new zwarthoorn\eveapi();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email zwarthoorn@example.com instead of using the issue tracker.

## Credits

- [Zwarthoorn][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/zwarthoorn/eveapi.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/zwarthoorn/eveapi/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/zwarthoorn/eveapi.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/zwarthoorn/eveapi.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/zwarthoorn/eveapi.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/zwarthoorn/eveapi
[link-travis]: https://travis-ci.org/zwarthoorn/eveapi
[link-scrutinizer]: https://scrutinizer-ci.com/g/zwarthoorn/eveapi/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/zwarthoorn/eveapi
[link-downloads]: https://packagist.org/packages/zwarthoorn/eveapi
[link-author]: https://github.com/zwarthoorn
[link-contributors]: ../../contributors
