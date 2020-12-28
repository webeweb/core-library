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
     */
    public function addHeader(string $name, string $value): CurlRequestInterface;

    /**
     * Add a POST data.
     *
     * @param string $name The POST data name.
     * @param string $value The POST data value.
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function addPostData(string $name, string $value): CurlRequestInterface;

    /**
     * Add a query data.
     *
     * @param string $name The query data name.
     * @param string $value The query data value.
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function addQueryData(string $name, string $value): CurlRequestInterface;

    /**
     * Call the request.
     *
     * @return CurlResponseInterface Returns the response.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function call(): CurlResponseInterface;

    /**
     * Clear headers.
     *
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function clearHeaders(): CurlRequestInterface;

    /**
     * Clear post data.
     *
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function clearPostData(): CurlRequestInterface;

    /**
     * Clear query data.
     *
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function clearQueryData(): CurlRequestInterface;

    /**
     * Get the configuration.
     *
     * @return CurlConfiguration Returns the configuration.
     */
    public function getConfiguration(): CurlConfiguration;

    /**
     * Get the headers.
     *
     * @return array Returns the headers.
     */
    public function getHeaders(): array;

    /**
     * Get the method.
     *
     * @return string Returns the method.
     */
    public function getMethod(): string;

    /**
     * Get the POST data.
     *
     * @return array Returns the POST data.
     */
    public function getPostData(): array;

    /**
     * Get the query data.
     *
     * @return array Returns the query data.
     */
    public function getQueryData(): array;

    /**
     * Get the resource path.
     *
     * @return string Returns the resource path.
     */
    public function getResourcePath(): string;

    /**
     * Remove an header.
     *
     * @param string $name The header name.
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function removeHeader(string $name): CurlRequestInterface;

    /**
     * Remove a POST data.
     *
     * @param string $name The POST data name.
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function removePostData(string $name): CurlRequestInterface;

    /**
     * Remove a query data.
     *
     * @param string $name The query data name.
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function removeQueryData(string $name): CurlRequestInterface;

    /**
     * Set the resource path.
     *
     * @param string|null $resourcePath The resource path.
     * @return CurlRequestInterface Returns this cURL request.
     */
    public function setResourcePath(?string $resourcePath): CurlRequestInterface;
}
