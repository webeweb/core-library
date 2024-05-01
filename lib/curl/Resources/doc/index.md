Documentation
=============

```php
use WBW\Library\Curl\Factory\CurlFactory;
use WBW\Library\Curl\Request\RequestInterface;

// Create a cURL POST request.
$request = CurlFactory::newCurlRequest(RequestInterface::REQUEST_POST);;
$request->getConfiguration()->setHost("http://domain.tld");
$request->setRessourcePath("/resource-path");
$request->addQueryData("id", 1);
$request->addPostData("firstname", "John");
$request->addPostData("lastname", "DOE");
// ...

// Call the POST request.
$response = $request->call();

// Handle the response.
// ...
```
