<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Security;

use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Authenticator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Security
 */
class Authenticator {

    /**
     * Host.
     *
     * @var string
     */
    private $host;

    /**
     * Password authentication.
     *
     * @var PasswordAuthentication
     */
    private $passwordAuthentication;

    /**
     * Port.
     *
     * @var integer
     */
    private $port;

    /**
     * Scheme.
     *
     * @var string
     */
    private $scheme;

    /**
     * Constructor.
     *
     * @param string $host The host.
     * @param PasswordAuthentication $passwordAuthentication
     */
    public function __construct($host, PasswordAuthentication $passwordAuthentication) {
        $this->host                   = $host;
        $this->passwordAuthentication = $passwordAuthentication;
    }

    /**
     * Get the host.
     *
     * @return string Returns the host.
     */
    public function getHost() {
        return $this->host;
    }

    /**
     * Get the password authentication.
     *
     * @return PasswordAuthentication Returns this password authentication.
     */
    public function getPasswordAuthentication() {
        return $this->passwordAuthentication;
    }

    /**
     * Get the port.
     *
     * @return integer Returns the port.
     */
    public function getPort() {
        return $this->port;
    }

    /**
     * Get the scheme.
     *
     * @return string Returns the scheme.
     */
    public function getScheme() {
        return $this->scheme;
    }

    /**
     * Set the host.
     *
     * @param string $host
     * @return Authenticator Returns this authenticator.
     */
    public function setHost($host) {
        $this->host = $host;
        return $this;
    }

    /**
     * Set the password authenticator.
     *
     * @param PasswordAuthentication $passwordAuthentication The password authentication.
     * @return Authenticator Returns this authenticator.
     */
    public function setPasswordAuthentication(PasswordAuthentication $passwordAuthentication) {
        $this->passwordAuthentication = $passwordAuthentication;
        return $this;
    }

    /**
     * Set the port.
     *
     * @param integer $port The port.
     * @return Authenticator Returns this authenticator.
     * @throws IllegalArgumentException Throws an illegal argument exception if the port isn't between 1 and 65536.
     */
    public function setPort($port) {
        if ($port < 0 || 65536 < $port) {
            throw new IllegalArgumentException("The port must be between 1 and 65536");
        }
        $this->port = $port;
        return $this;
    }

    /**
     * Set the shceme.
     *
     * @param string $scheme The scheme.
     * @return Authenticator Returns this authenticator.
     */
    public function setScheme($scheme) {
        $this->scheme = $scheme;
        return $this;
    }

}
