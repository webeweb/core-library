core-library
============

[![Build Status](https://img.shields.io/github/workflow/status/webeweb/core-library/build?style=flat-square)](https://github.com/webeweb/core-library/actions)
[![Coverage Status](https://img.shields.io/coveralls/github/webeweb/core-library/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/core-library?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/core-library/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/core-library/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/core-library.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-library)
[![License](https://img.shields.io/packagist/l/webeweb/core-library.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-library)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/core-library)

`core-library` contains some classes we re-use regularly into other packages or
projects.

Provides:

- Accounting models
- Billing models
- cURL wrapper
- Database connectors (Access, SQL Server, MySQL, etc.)
- FTP clients (FTP, FTPS, SFTP, etc.)
- Image utilities
- Logger models
- Maths helpers (Fibonacci, Luhn, ROT 13, etc.)
- Planning utilities (time slots, etc.)
- Quadratus models
- Security classes (authenticator, password authentication, token generator, etc.)
- Serialization utilities
- SkiData utilities (card, customer, user, etc.)
- Sorting utilities (alphabetical tree sort, quick sort, etc.)
- Traits collection (array, boolean, double, float, integer, string, etc.)
- Types utilities (array, boolean, double, float, integer, string, etc.)
- Validation API (rule, rule set, validator, etc.)
- Vehicle models

If you like this package, pay me a beer (or a coffee)
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)

## Compatibility

[![PHP](https://img.shields.io/packagist/php-v/webeweb/core-library.svg?style=flat-square)](http://php.net)

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/core-library
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ git clone https://github.com/webeweb/core-library.git
$ cd core-library
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

## License

`core-library` is released under the MIT License. See the bundled [LICENSE](LICENSE)
file for details.

## Donate

If you like this work, please consider donating at
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)
