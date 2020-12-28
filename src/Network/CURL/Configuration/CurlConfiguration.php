<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Configuration;

/**
 * cURL configuration.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Configuration
 */
class CurlConfiguration {

    /**
     * Allow encoding.
     *
     * @var bool
     */
    private $allowEncoding;

    /**
     * Connect timeout.
     *
     * @var int
     */
    private $connectTimeout;

    /**
     * Debug.
     *
     * @var bool
     */
    private $debug;

    /**
     * Debug file.
     *
     * @var string
     */
    private $debugFile;

    /**
     * Headers.
     *
     * @var array
     */
    private $headers;

    /**
     * Host.
     *
     * @var string|null
     */
    private $host;

    /**
     * HTTP basic password.
     *
     * @var string|null
     */
    private $httpPassword;

    /**
     * HTTP basic username.
     *
     * @var string|null
     */
    private $httpUsername;

    /**
     * Proxy host.
     *
     * @var string|null
     */
    private $proxyHost;

    /**
     * Proxy password.
     *
     * @var string|null
     */
    private $proxyPassword;

    /**
     * Proxy port.
     *
     * @var int|null
     */
    private $proxyPort;

    /**
     * Proxy type.
     *
     * @var int|null
     */
    private $proxyType;

    /**
     * Proxy username.
     *
     * @var string|null
     */
    private $proxyUsername;

    /**
     * HTTP request timeout.
     *
     * @var int
     */
    private $requestTimeout;

    /**
     * SSL verification.
     *
     * @var bool
     */
    private $sslVerification;

    /**
     * User agent.
     *
     * @var string
     */
    private $userAgent;

    /**
     * Verbose.
     *
     * @var bool
     */
    private $verbose;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAllowEncoding(false);
        $this->setConnectTimeout(0);
        $this->setDebug(false);
        $this->setDebugFile("php://output");
        $this->setHeaders([]);
        $this->setRequestTimeout(0);
        $this->setSslVerification(true);
        $this->setUserAgent("webeweb/curl-library");
        $this->setVerbose(false);
    }

    /**
     * Add an header.
     *
     * @param string $name The header name.
     * @param string $value The header value.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function addHeader(string $name, string $value): CurlConfiguration {
        $this->headers[$name] = $value;
        return $this;
    }

    /**
     * Clear the headers.
     *
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function clearHeaders(): CurlConfiguration {
        return $this->setHeaders([]);
    }

    /**
     * Get the allow encoding.
     *
     * @return bool Returns the allow encoding.
     */
    public function getAllowEncoding(): bool {
        return $this->allowEncoding;
    }

    /**
     * Get the connect timeout.
     *
     * @return int Returns the connect timeout.
     */
    public function getConnectTimeout(): int {
        return $this->connectTimeout;
    }

    /**
     * Ge the debug.
     *
     * @return bool Returns the debug.
     */
    public function getDebug(): bool {
        return $this->debug;
    }

    /**
     * Get the debug file.
     *
     * @return string Returns the debug file.
     */
    public function getDebugFile(): string {
        return $this->debugFile;
    }

    /**
     * Get the headers.
     *
     * @return array Returns the headers.
     */
    public function getHeaders(): array {
        return $this->headers;
    }

    /**
     * Get the host.
     *
     * @return string|null Returns the host.
     */
    public function getHost(): ?string {
        return $this->host;
    }

    /**
     * Get the HTTP password.
     *
     * @return string|null Returns the HTTP password.
     */
    public function getHttpPassword(): ?string {
        return $this->httpPassword;
    }

    /**
     * Get the HTTP username.
     *
     * @return string|null Returns the HTTP username.
     */
    public function getHttpUsername(): ?string {
        return $this->httpUsername;
    }

    /**
     * Get the proxy host.
     *
     * @return string|null Returns the proxy host.
     */
    public function getProxyHost(): ?string {
        return $this->proxyHost;
    }

    /**
     * Get the proxy password.
     *
     * @return string|null Returns the proxy password.
     */
    public function getProxyPassword(): ?string {
        return $this->proxyPassword;
    }

    /**
     * Get the proxy port.
     *
     * @return int|null Returns the proxy port.
     */
    public function getProxyPort(): ?int {
        return $this->proxyPort;
    }

    /**
     * Get the proxy type.
     *
     * @return int|null Returns the proxy type.
     */
    public function getProxyType(): ?int {
        return $this->proxyType;
    }

    /**
     * Get the proxy username.
     *
     * @return string|null Returns the proxy username.
     */
    public function getProxyUsername(): ?string {
        return $this->proxyUsername;
    }

    /**
     * Get the request timeout.
     *
     * @return int Returns the request timeout.
     */
    public function getRequestTimeout(): int {
        return $this->requestTimeout;
    }

    /**
     * Get the SSL verification.
     *
     * @return bool Returns the SSL verification.
     */
    public function getSslVerification(): bool {
        return $this->sslVerification;
    }

    /**
     * Get the user agent.
     *
     * @return string Returns the user agent.
     */
    public function getUserAgent(): string {
        return $this->userAgent;
    }

    /**
     * Get the verbose.
     *
     * @return bool Returns the verbose.
     */
    public function getVerbose(): bool {
        return $this->verbose;
    }

    /**
     * Remove an header.
     *
     * @param string $name The header name.
     * @return void
     */
    public function removeHeader(string $name): void {
        if (true === array_key_exists($name, $this->headers)) {
            unset($this->headers[$name]);
        }
    }

    /**
     * Set the allow encoding.
     *
     * @param bool $allowEncoding The allow encoding.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setAllowEncoding(bool $allowEncoding): CurlConfiguration {
        $this->allowEncoding = $allowEncoding;
        return $this;
    }

    /**
     * Set the connect timeout.
     *
     * @param int $connectTimeout The connect timeout.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setConnectTimeout(int $connectTimeout): CurlConfiguration {
        $this->connectTimeout = $connectTimeout;
        return $this;
    }

    /**
     * Set the debug.
     *
     * @param bool $debug The debug.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setDebug(bool $debug): CurlConfiguration {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Set the debug file.
     *
     * @param string $debugFile The debug file.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setDebugFile(string $debugFile): CurlConfiguration {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Set the headers.
     *
     * @param array $headers The headers
     * @return CurlConfiguration Returns this cURL configuration.
     */
    protected function setHeaders(array $headers): CurlConfiguration {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Set the host.
     *
     * @param string $host The host.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setHost(string $host): CurlConfiguration {
        $this->host = preg_replace("/\/$/", "", trim($host));
        return $this;
    }

    /**
     * Set the HTTP basic password.
     *
     * @param string|null $httpPassword The HTTP basic password.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setHttpPassword(?string $httpPassword): CurlConfiguration {
        $this->httpPassword = $httpPassword;
        return $this;
    }

    /**
     * Set the HTTP basic username.
     *
     * @param string|null $httpUsername The HTTP basic username.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setHttpUsername(?string $httpUsername): CurlConfiguration {
        $this->httpUsername = $httpUsername;
        return $this;
    }

    /**
     * Set the proxy host.
     *
     * @param string|null $proxyHost The proxy host.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setProxyHost(?string $proxyHost): CurlConfiguration {
        $this->proxyHost = $proxyHost;
        return $this;
    }

    /**
     * Set the proxy password.
     *
     * @param string|null $proxyPassword The proxy password.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setProxyPassword(?string $proxyPassword): CurlConfiguration {
        $this->proxyPassword = $proxyPassword;
        return $this;
    }

    /**
     * Set the proxy port.
     *
     * @param int|null $proxyPort The proxy port.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setProxyPort(?int $proxyPort): CurlConfiguration {
        $this->proxyPort = $proxyPort;
        return $this;
    }

    /**
     * Set the proxy type.
     *
     * @param int|null $proxyType The proxy type.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setProxyType(?int $proxyType): CurlConfiguration {
        $this->proxyType = $proxyType;
        return $this;
    }

    /**
     * Set the proxy username.
     *
     * @param string|null $proxyUsername The proxy username.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setProxyUsername(?string $proxyUsername): CurlConfiguration {
        $this->proxyUsername = $proxyUsername;
        return $this;
    }

    /**
     * Set the request timeout.
     *
     * @param int $requestTimeout The request timeout.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setRequestTimeout(int $requestTimeout): CurlConfiguration {
        $this->requestTimeout = $requestTimeout;
        return $this;
    }

    /**
     * Set the SSL verification.
     *
     * @param bool $sslVerification The SSL verification.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setSslVerification(bool $sslVerification): CurlConfiguration {
        $this->sslVerification = $sslVerification;
        return $this;
    }

    /**
     * Set the user agent.
     *
     * @param string $userAgent The user agent.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setUserAgent(string $userAgent): CurlConfiguration {
        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Set the verbose.
     *
     * @param bool $verbose The verbose.
     * @return CurlConfiguration Returns this cURL configuration.
     */
    public function setVerbose(bool $verbose): CurlConfiguration {
        $this->verbose = $verbose;
        return $this;
    }
}
