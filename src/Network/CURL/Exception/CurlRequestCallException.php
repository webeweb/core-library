<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Exception;

use WBW\Library\Core\Network\CURL\API\CurlResponseInterface;

/**
 * cURL request call exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Exception
 */
class CurlRequestCallException extends AbstractCurlException {

    /**
     * cURL response.
     *
     * @var CurlResponseInterface
     */
    private $response;

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param int $code The code.
     * @param CurlResponseInterface $response The response.
     */
    public function __construct($message, $code, CurlResponseInterface $response) {
        parent::__construct($message, $code);
        $this->setResponse($response);
    }

    /**
     * Get the response.
     *
     * @return CurlResponseInterface Returns the response.
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * Set the response.
     *
     * @param CurlResponseInterface $response The response.
     * @return CurlRequestCallException Returns this request call exception.
     */
    protected function setResponse(CurlResponseInterface $response) {
        $this->response = $response;
        return $this;
    }
}
