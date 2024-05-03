Documentation
=============

> IMPORTANT NOTICE: The API provider can be used with a debug flag and/or a
> logger with the following code:

```php
use Psr\Log\LoggerInterface;
use WBW\Library\Easilys\Provider\ApiProvider;

// $logger = ...

// Create the API provider
$provider = new ApiProvider("YOUR_ENDPOINT", "YOUR_ACCESS_TOKEN", $logger);
$provider->setDebug(true);
```

---

GET Sites root tree

```php
use WBW\Library\Easilys\Model\Site;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Request\General\GetSitesRootTreeRequest;
use WBW\Library\Easilys\Response\General\GetSitesResponse;

// Create the API provider
$provider = new ApiProvider("YOUR_ENDPOINT", "YOUR_ACCESS_TOKEN");

$request = new GetSitesRootTreeRequest();
$request->setId(1);
$request->setIdTree(1);

/** @var GetSitesResponse $response */
$response = $provider->sendRequest($request);

/** @var Site[] */
$response->getData();
```

---

GET Price list headers site

```php
use WBW\Library\Easilys\Model\PriceList;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Request\Products\GetPriceListHeadersSiteRequest;
use WBW\Library\Easilys\Response\Products\GetPriceListHeadersSiteResponse;

// Create the API provider
$provider = new ApiProvider("YOUR_ENDPOINT", "YOUR_ACCESS_TOKEN");

$request = new GetPriceListHeadersSiteRequest();
$request->setIdSite(1);

/** @var GetPriceListHeadersSiteResponse $response */
$response = $provider->sendRequest($request);

/** @var PriceList[] */
$response->getData();
```

---

GET Price list supplier products site

```php
use WBW\Library\Easilys\Model\PriceListSupplierProduct;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Request\Products\GetPriceListSupplierProductsSiteRequest;
use WBW\Library\Easilys\Response\Products\GetPriceListSupplierProductsSiteResponse;

// Create the API provider
$provider = new ApiProvider("YOUR_ENDPOINT", "YOUR_ACCESS_TOKEN");

$priceList = 1; // for example

$request = new GetPriceListSupplierProductsSiteRequest();
$request->setIdSite(1);
$request->addParam("search", "priceList[id]:=$priceList");

/** @var GetPriceListSupplierProductsSiteResponse $response */
$response = $provider->sendRequest($request);

/** @var PriceListSupplierProduct[] */
$response->getData();
```

---

GET Qualities

```php
use WBW\Library\Easilys\Model\Quality;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Request\Products\GetQualitiesRequest;
use WBW\Library\Easilys\Response\Products\GetQualitiesResponse;

// Create the API provider
$provider = new ApiProvider("YOUR_ENDPOINT", "YOUR_ACCESS_TOKEN");

$request = new GetQualitiesRequest();

/** @var GetQualitiesResponse $response */
$response = $provider->sendRequest($request);

/** @var Quality[] */
$response->getData();
```

---

GET Ranges

```php
use WBW\Library\Easilys\Model\Range;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Request\Products\GetRangesRequest;
use WBW\Library\Easilys\Response\Products\GetRangesResponse;

// Create the API provider
$provider = new ApiProvider("YOUR_ENDPOINT", "YOUR_ACCESS_TOKEN");

$request = new GetRangesRequest();

/** @var GetRangesResponse $response */
$response = $provider->sendRequest($request);

/** @var Range[] */
$response->getData();
```

---

GET Units

```php
use WBW\Library\Easilys\Model\Unit;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Request\Products\GetUnitsRequest;
use WBW\Library\Easilys\Response\Products\GetUnitsResponse;

// Create the API provider
$provider = new ApiProvider("YOUR_ENDPOINT", "YOUR_ACCESS_TOKEN");

$request = new GetUnitsRequest();

/** @var GetUnitsResponse $response */
$response = $provider->sendRequest($request);

/** @var Unit[] */
$response->getData();
```

---

GET Storehouses site

```php
use WBW\Library\Easilys\Model\Storehouse;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Request\Suppliers\GetStorehousesSiteRequest;
use WBW\Library\Easilys\Response\Suppliers\GetStorehousesSiteResponse;

// Create the API provider
$provider = new ApiProvider("YOUR_ENDPOINT", "YOUR_ACCESS_TOKEN");

$site = 2; // for example
$date = "2024-05-03" // for example

$request = new GetStorehousesSiteRequest();
$request->setIdSite($site);
$request->addParam("search", "dateValid:=$date+network-full:=1+seeAll:=true");

/** @var GetStorehousesSiteResponse $response */
$response = $provider->sendRequest($request);

/** @var Storehouse[] */
$response->getData();
```
