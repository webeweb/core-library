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

use WBW\Library\Core\Network\CURL\API\CURLResponseInterface;

/**
 * cURL request call exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Exception
 */
class CURLRequestCallException extends AbstractCURLException {

    /**
     * cURL response.
     *
     * @var CURLResponseInterface
     */
    private $response;

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param int $code The code.
     * @param CURLResponseInterface $response The response.
     */
    public function __construct($message, $code, CURLResponseInterface $response) {
        parent::__construct($message, $code);
        $this->setResponse($response);
    }

    /**
     * Get the response.
     *
     * @return CURLResponseInterface Returns the response.
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * Set the response.
     *
     * @param CURLResponseInterface $response The response.
     * @return CURLRequestCallException Returns this request call exception.
     */
    protected function setResponse(CURLResponseInterface $response) {
        $this->response = $response;
        return $this;
    }
}
