<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Curl\Exception;

use WBW\Library\Curl\API\CurlResponseInterface;

/**
 * cURL request call exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Curl\Exception
 */
class CurlRequestCallException extends AbstractCurlException {

    /**
     * cURL response.
     *
     * @var CurlResponseInterface|null
     */
    private $response;

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param int $code The code.
     * @param CurlResponseInterface $response The response.
     */
    public function __construct(string $message, int $code, CurlResponseInterface $response) {
        parent::__construct($message, $code);
        $this->setResponse($response);
    }

    /**
     * Get the response.
     *
     * @return CurlResponseInterface|null Returns the response.
     */
    public function getResponse(): ?CurlResponseInterface {
        return $this->response;
    }

    /**
     * Set the response.
     *
     * @param CurlResponseInterface $response The response.
     * @return CurlRequestCallException Returns this request call exception.
     */
    protected function setResponse(CurlResponseInterface $response): CurlRequestCallException {
        $this->response = $response;
        return $this;
    }
}
