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
use WBW\Library\Core\Exception\ApiException;
use WBW\Library\Core\Network\CURL\Configuration\CurlConfiguration;
use WBW\Library\Core\Network\CURL\Request\CurlPostRequest;
use WBW\Library\Core\Provider\AbstractProvider;
use WBW\Library\Core\ThirdParty\Adoria\API\ApiProviderInterface;
use WBW\Library\Core\ThirdParty\Adoria\Model\RequestData;
use WBW\Library\Core\ThirdParty\Adoria\Model\Result;
use WBW\Library\Core\ThirdParty\Adoria\Serializer\RequestSerializer;
use WBW\Library\Core\ThirdParty\Adoria\Serializer\ResponseDeserializer;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Adoria\Provider
 */
class ApiProvider extends AbstractProvider implements ApiProviderInterface {

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
     * @throws ApiException Throws an API exception exception if an error occurs.
     */
    protected function callAPI($resourcePath, array $postData) {

        try {

            $cURLRequest = new CurlPostRequest(new CurlConfiguration(), $resourcePath);
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

            throw new ApiException("Failed to call Adoria API", $ex);
        }
    }

    /**
     * Request data.
     *
     * @param RequestData $requestData The request data.
     * @return Result Returns the result.
     * @throws ApiException Throws an API exception exception if an error occurs.
     */
    public function requestData(RequestData $requestData) {

        $parameters = RequestSerializer::serializeRequestData($requestData);

        $rawResponse = $this->callAPI(self::REQUEST_DATA_RESOURCE_PATH, $parameters);

        return ResponseDeserializer::deserializeResult($rawResponse);
    }
}
