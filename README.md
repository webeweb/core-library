WBWCoreLibrary
====================

[![Build Status](https://travis-ci.org/webeweb/WBWCoreLibrary.svg?branch=master)](https://travis-ci.org/webeweb/WBWCoreLibrary) [![Coverage Status](https://coveralls.io/repos/github/webeweb/WBWCoreLibrary/badge.svg?branch=master)](https://coveralls.io/github/webeweb/WBWCoreLibrary?branch=master) [![Latest Stable Version](https://poser.pugx.org/webeweb/core-library/v/stable)](https://packagist.org/packages/webeweb/core-library) [![Latest Unstable Version](https://poser.pugx.org/webeweb/core-library/v/unstable)](https://packagist.org/packages/webeweb/core-library) [![License](https://poser.pugx.org/webeweb/core-library/license)](https://packagist.org/packages/webeweb/core-library) [![composer.lock](https://poser.pugx.org/webeweb/core-library/composerlock)](https://packagist.org/packages/webeweb/core-library) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/57a910cc-74d4-4727-8c89-2805241f4ee6/mini.png)](https://insight.sensiolabs.com/projects/57a910cc-74d4-4727-8c89-2805241f4ee6)

This package contains some classes we re-use regulary into other packages or projects.

---

## Installation

Edit `composer.json` file to add this library package:

```yml

"require": {
    ...
    "webeweb/core-library": "~1.0@dev"
},

```

Run `composer update webeweb/core-library`

---

## Testing

To test the package, is better to clone this repository on your computer. After, go to the package folder and do
the following (assuming you have `composer` installed on your computer):

```bash

$ composer install --no-interaction --prefer-source --dev

```

Once all required libraries are installed then do:

```bash

$ vendor/bin/phpunit

```

---

## License

WBWCoreLibrary is released under the LGPL License. See the bundled [LICENSE](LICENSE) file for details.
