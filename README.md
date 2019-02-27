core-library
============

[![Build Status](https://travis-ci.org/webeweb/core-library.svg?branch=master)](https://travis-ci.org/webeweb/core-library)
[![Coverage Status](https://coveralls.io/repos/github/webeweb/core-library/badge.svg?branch=master)](https://coveralls.io/github/webeweb/core-library?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/webeweb/core-library/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/webeweb/core-library/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/webeweb/core-library/v/stable)](https://packagist.org/packages/webeweb/core-library)
[![Latest Unstable Version](https://poser.pugx.org/webeweb/core-library/v/unstable)](https://packagist.org/packages/webeweb/core-library)
[![License](https://poser.pugx.org/webeweb/core-library/license)](https://packagist.org/packages/webeweb/core-library)
[![composer.lock](https://poser.pugx.org/webeweb/core-library/composerlock)](https://packagist.org/packages/webeweb/core-library)

`core-library` contains some classes we re-use regularly into other packages or
projects.

Provides:

- Algorithms utilities (Luhn, etc.)
- Arguments utilities (array, boolean, double, float, integer, string, etc.)
- Databases connectors (Access, SQL Server, MySQL, etc.)
- Exceptions classes
- File system classes (directories, files, zip, etc.)
- Model classes (choices, contact, node, organizer, etc.)
- Network utilities (cURL, FTP, HTTP, SFTP, etc)
- Security classes (authenticator, password authentication, etc.)
- SkiData API (https://github.com/webeweb/skidata-library)
- Sorting utilities (alphabetical tree sort, quick sort, etc.)
- Validation API (rule, rule set, validator, etc.)

---

## Compatibility

[![PHP](https://img.shields.io/badge/PHP-%5E5.6%7C%5E7.0-blue.svg)](http://php.net)

Requires:

[![ext-curl](https://img.shields.io/badge/PHP-ext--curl-blue.svg)](http://php.net/manual/en/book.curl.php)
[![ext-ftp](https://img.shields.io/badge/PHP-ext--ftp-blue.svg)](http://php.net/manual/en/book.ftp.php)
[![ext-intl](https://img.shields.io/badge/PHP-ext--intl-blue.svg)](http://php.net/manual/en/book.intl.php)
[![ext-ssh2](https://img.shields.io/badge/PHP-ext--ssh2-blue.svg)](http://php.net/manual/en/book.ssh2.php)
[![ext-zip](https://img.shields.io/badge/PHP-ext--zip-blue.svg)](http://php.net/manual/en/book.zip.php)

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/core-library "^4.0"
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

---

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

---

## License

`core-library` is released under the LGPL License. See the bundled [LICENSE](LICENSE)
file for details.
