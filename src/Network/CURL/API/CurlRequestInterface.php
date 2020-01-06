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

use Exception;
use WBW\Library\Core\Argument\Exception\StringArgumentException;
use WBW\Library\Core\Network\CURL\Configuration\CurlConfiguration;

/**
 * cURL request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\API
 */
interface CurlRequestInterface {

    /**
     * Add an header.
     *
     * @param string $name The header name.
     * @param string $value The header value.
     * @return CurlRequestInterface Returns this cURL request.
     * @throws StringArgumentException Throws a string argument exception if the name is not a string.
     */
    public function addHeader($name, $value);

    /**
     * Add a POST data.
     *
     * @param string $name The POST data name.
     * @param string $value The POST data value.
     * @return CurlRequestInterface Returns this cURL request.
     * @throws StringArgumentException Throws a string argument exception if the name is not a string.
     */
    public function addPostData($name, $value);

    /**
     * Add a query data.
     *
     * @param string $name The query data name.
     * @param string $value The query data value.
     * @return CurlRequestInterface Returns this cURL request.
     * @throws StringArgumentException Throws a string argument exception if the name is not a string.
     */
    public function addQueryData($name, $value);

    /**
     * Call the request.
     *
     * @return CurlResponseInterface Returns the response.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function call();

    /**
     * Clear headers.
     *
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function clearHeaders();

    /**
     * Clear post data.
     *
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function clearPostData();

    /**
     * Clear query data.
     *
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function clearQueryData();

    /**
     * Get the configuration.
     *
     * @return CurlConfiguration Returns the configuration.
     */
    public function getConfiguration();

    /**
     * Get the headers.
     *
     * @return array Returns the headers.
     */
    public function getHeaders();

    /**
     * Get the method.
     *
     * @return string Returns the method.
     */
    public function getMethod();

    /**
     * Get the POST data.
     *
     * @return array Returns the POST data.
     */
    public function getPostData();

    /**
     * Get the query data.
     *
     * @return array Returns the query data.
     */
    public function getQueryData();

    /**
     * Get the resource path.
     *
     * @return string Returns the resource path.
     */
    public function getResourcePath();

    /**
     * Remove an header.
     *
     * @param string $name The header name.
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function removeHeader($name);

    /**
     * Remove a POST data.
     *
     * @param string $name The POST data name.
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function removePostData($name);

    /**
     * Remove a query data.
     *
     * @param string $name The query data name.
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function removeQueryData($name);

    /**
     * Set the resource path.
     *
     * @param string $resourcePath The resource path.
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function setResourcePath($resourcePath);
}
