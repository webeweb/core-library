<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Net;

use WBW\Library\Core\IO\IOException;
use WBW\Library\Core\Security\Authenticator;

/**
 * FTP client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Net
 */
class FTPClient {

    /**
     * Authenticator.
     *
     * @var Authenticator
     */
    private $authenticator;

    /**
     * Connection.
     *
     * @var ressource.
     */
    private $connection;

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     */
    public function __construct(Authenticator $authenticator) {
        $this->authenticator = $authenticator;
    }

    /**
     * Closes this FTP connection.
     *
     * @return FTPClient Returns this FTP client.
     * @throws IOException Throws an IO exception if an I/O error occurs.
     */
    public function close() {
        if (false === ftp_close($this->connection)) {
            throw new IOException(sprintf("ftp://%s disconnection failed", $this->authenticator->getHost()));
        }
        return $this;
    }

    /**
     * Opens this FTP connection.
     *
     * @param integer $timeout The timeout.
     * @return FTPClient Returns this FTP client.
     * @throws IOException Throws an IO exception if an I/O error occurs.
     */
    public function connect($timeout = 90) {
        if (false === ($this->connection = ftp_connect($this->authenticator->getHost(), $this->authenticator->getPort(), $timeout))) {
            throw new IOException(sprintf("ftp://%s connection failed", $this->authenticator->getHost()));
        }
        return $this;
    }

    /**
     * Get the authenticator.
     *
     * @return Auhtenticator Returns the authenticator.
     */
    public function getAuthenticator() {
        return $this->authenticator;
    }

    /**
     * Logs in to this FTP connection.
     *
     * @return FTPClient Returns this FTP client.
     * @throws IOException Throws an IO exception if an I/O error occurs.
     */
    public function login() {
        if (false === ftp_login($this->connection, $this->authenticator->getPasswordAuthentication()->getUsername(), $this->authenticator->getPasswordAuthentication()->getPassword())) {
            throw new IOException(sprintf("ftp://%s:%s@%s failed", $this->authenticator->getHost(), $this->authenticator->getPasswordAuthentication()->getUsername(), $this->authenticator->getPasswordAuthentication()->getPassword()));
        }
        return $this;
    }

    /**
     * Creates a directory.
     *
     * @param string $directory The directory.
     * @return FTPClient Returns this FTP client.
     * @throws IOException Throws an IO exception if an I/O error occurs.
     */
    public function mkdir($directory) {
        if (false === ftp_mkdir($this->connection, $directory)) {
            throw new IOException(sprintf("mkdir %s failed", $directory));
        }
        return $this;
    }

    /**
     * Set the authenticator.
     *
     * @param Authenticator $authenticator The authenticator.
     * @return FTPClient Returns this FTP client.
     */
    public function setAuthenticator(Authenticator $authenticator) {
        $this->authenticator = $authenticator;
        return $this;
    }

}
