<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\API;

/**
 * cURL response interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\API
 */
interface CurlResponseInterface {

    /**
     * Get the request body.
     *
     * @return string Returns the request body.
     */
    public function getRequestBody();

    /**
     * Get the request header.
     *
     * @return array Returns the request header.
     */
    public function getRequestHeader();

    /**
     * Get the request URL.
     *
     * @return string Returns the request URL.
     */
    public function getRequestUrl();

    /**
     * Get the response body.
     *
     * @return string The response body.
     */
    public function getResponseBody();

    /**
     * Get the response header.
     *
     * @return array Returns the response header.
     */
    public function getResponseHeader();

    /**
     * Get the response info.
     *
     * @return array Returns the response info.
     */
    public function getResponseInfo();
}
