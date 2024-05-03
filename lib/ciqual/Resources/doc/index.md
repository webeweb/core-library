Documentation
=============

Download and extract ZIP

```php
use WBW\Library\Ciqual\Model\Table;
use WBW\Library\Ciqual\Provider\XmlProvider;

$url  = "https://ciqual.anses.fr/cms/sites/default/files/inline-files/XML_2020_07_07.zip";
$file = "/path/to/file.zip";

XmlProvider::downloadZip($url, $file);

/** @var Table $table */
$table = XmlProvider::extractZip($file);
```
