<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\FTP\Client;

use WBW\Library\Core\Network\FTP\Exception\FtpException;
use WBW\Library\Core\Security\Authenticator;

/**
 * Abstract FTP client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\FTP\Client
 * @abstract
 */
abstract class AbstractFtpClient {

    /**
     * Authenticator.
     *
     * @var Authenticator
     */
    private $authenticator;

    /**
     * Connection.
     *
     * @var ressource
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
     * Create a new FTP exception.
     *
     * @param string $message The message.
     * @return FtpException Returns a new FTP exception.
     */
    protected function newFtpException($message) {

        $format = "%s://%s:%s@%s:%d {$message}";
        $args   = [
            $this->getAuthenticator()->getScheme(),
            $this->getAuthenticator()->getPasswordAuthentication()->getUsername(),
            $this->getAuthenticator()->getPasswordAuthentication()->getPassword(),
            $this->getAuthenticator()->getHostname(),
            $this->getAuthenticator()->getPort(),
        ];

        return new FtpException(vsprintf($format, $args));
    }

    /**
     * Set the authenticator.
     *
     * @param Authenticator $authenticator The authenticator.
     * @return AbstractFtpClient Returns this FTP client.
     */
    protected function setAuthenticator(Authenticator $authenticator) {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Set the connection.
     *
     * @param mixed $connection The connection.
     * @return AbstractFtpClient Returns this FTP client.
     */
    protected function setConnection($connection) {
        $this->connection = $connection;
        return $this;
    }
}
