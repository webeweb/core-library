<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\FTP;

use WBW\Library\Core\Exception\Network\FTPException;
use WBW\Library\Core\Security\Authenticator;

/**
 * Abstract FTP client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\FTP
 * @abstract
 */
abstract class AbstractFTPClient {

    /**
     * Authenticator.
     *
     * @var Authenticator
     */
    private $authenticator;

    /**
     * Connection.
     *
     * @var mixed
     */
    private $connection;

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     */
    protected function __construct(Authenticator $authenticator) {
        $this->setAuthenticator($authenticator);
    }

    /**
     * Get the authenticator.
     *
     * @return Authenticator Returns the authenticator.
     */
    public function getAuthenticator() {
        return $this->authenticator;
    }

    /**
     * Get the connection.
     *
     * @return mixed Returns the connection.
     */
    public function getConnection() {
        return $this->connection;
    }

    /**
     * Construct a new FTP exception.
     *
     * @param string $message The message.
     * @return FTPException Returns a new FTP exception.
     */
    protected function newFTPException($message) {
        return new FTPException(sprintf("%s://%s:%s@%s:%d " . $message, $this->authenticator->getScheme(), $this->authenticator->getPasswordAuthentication()->getUsername(), $this->authenticator->getPasswordAuthentication()->getPassword(), $this->authenticator->getHost(), $this->authenticator->getPort()));
    }

    /**
     * Set the authenticator.
     *
     * @param Authenticator $authenticator The authenticator.
     * @returns AbstractFTPClient Returns this abstract FTP client.
     */
    protected function setAuthenticator(Authenticator $authenticator) {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Set the connection.
     *
     * @param mixed $connection The connection.
     * @returns AbstractFTPClient Returns this abstract FTP client.
     */
    protected function setConnection($connection) {
        $this->connection = $connection;
        return $this;
    }

}
