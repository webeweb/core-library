<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Adoria\Provider;

use Exception;
use WBW\Library\Core\Network\CURL\Configuration\CURLConfiguration;
use WBW\Library\Core\Network\CURL\Request\CURLPostRequest;
use WBW\Library\Core\ThirdParty\Adoria\API\APIProviderInterface;
use WBW\Library\Core\ThirdParty\Adoria\Exception\APIException;
use WBW\Library\Core\ThirdParty\Adoria\Model\RequestData;
use WBW\Library\Core\ThirdParty\Adoria\Model\Result;
use WBW\Library\Core\ThirdParty\Adoria\Normalizer\RequestNormalizer;
use WBW\Library\Core\ThirdParty\Adoria\Normalizer\ResponseNormalizer;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Adoria\Provider
 */
class APIProvider implements APIProviderInterface {

    /**
     * Debug.
     *
     * @var bool
     */
    private $debug;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setDebug(false);
    }

    /**
     * Call API.
     *
     * @param string $resourcePath The resource path.
     * @param array $postData The post data.
     * @return string Returns the response.
     * @throws APIException Throws an API exception exception if an error occurs.
     */
    protected function callAPI($resourcePath, array $postData) {

        try {

            $cURLRequest = new CURLPostRequest(new CURLConfiguration(), $resourcePath);
            $cURLRequest->getConfiguration()->addHeader("Accept", "application/json");
            $cURLRequest->getConfiguration()->addHeader("Content-Type", "application/json");
            $cURLRequest->getConfiguration()->setDebug($this->getDebug());
            $cURLRequest->getConfiguration()->setHost(self::ENDPOINT_PATH);
            $cURLRequest->getConfiguration()->setUserAgent("webeweb/adoria-library");

            // Handle each parameter.
            foreach ($postData as $name => $value) {
                $cURLRequest->addPostData($name, $value);
            }

            $cURLResponse = $cURLRequest->call();

            return $cURLResponse->getResponseBody();
        } catch (Exception $ex) {

            throw new APIException("Failed to call Adoria API", $ex);
        }
    }

    /**
     * Get the debug.
     *
     * @return bool Returns the debug.
     */
    public function getDebug() {
        return $this->debug;
    }

    /**
     * Request data.
     *
     * @param RequestData $requestData The request data.
     * @return Result Returns the result.
     * @throws APIException Throws an API exception exception if an error occurs.
     */
    public function requestData(RequestData $requestData) {

        $parameters = RequestNormalizer::normalizeRequestData($requestData);

        $rawResponse = $this->callAPI(self::REQUEST_DATA_RESOURCE_PATH, $parameters);

        return ResponseNormalizer::denormalizeResult($rawResponse);
    }

    /**
     * Set the debug.
     *
     * @param bool $debug The debug.
     * @return APIProvider Returns this API provider.
     */
    public function setDebug($debug) {
        $this->debug = $debug;
        return $this;
    }
}
