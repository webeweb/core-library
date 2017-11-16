core-library
============

[![Build Status](https://travis-ci.org/webeweb/core-library.svg?branch=master)](https://travis-ci.org/webeweb/core-library) [![Coverage Status](https://coveralls.io/repos/github/webeweb/core-library/badge.svg?branch=master)](https://coveralls.io/github/webeweb/core-library?branch=master) [![Latest Stable Version](https://poser.pugx.org/webeweb/core-library/v/stable)](https://packagist.org/packages/webeweb/core-library) [![Latest Unstable Version](https://poser.pugx.org/webeweb/core-library/v/unstable)](https://packagist.org/packages/webeweb/core-library) [![License](https://poser.pugx.org/webeweb/core-library/license)](https://packagist.org/packages/webeweb/core-library) [![composer.lock](https://poser.pugx.org/webeweb/core-library/composerlock)](https://packagist.org/packages/webeweb/core-library) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/57a910cc-74d4-4727-8c89-2805241f4ee6/mini.png)](https://insight.sensiolabs.com/projects/57a910cc-74d4-4727-8c89-2805241f4ee6)

This package contains some classes we re-use regularly into other packages or projects.

`core-library` uses a rolling release based on git master branch which is considered
stable.

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash

$ composer require webeweb/core-library "~1.0@dev"

```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

---

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash

$ mkdir core-library
$ cd core-library
$ git clone git@github.com:webeweb/core-library.git .
$ composer install

```

Once all required libraries are installed then do:

```bash

$ vendor/bin/phpunit

```

---

## License

core-library is released under the LGPL License. See the bundled [LICENSE](LICENSE)
file for details.
