<?php

/*
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
 * FTP client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\FTP
 */
class FTPClient extends AbstractFTPClient {

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     */
    public function __construct(Authenticator $authenticator) {
        parent::__construct($authenticator);

        $this->getAuthenticator()->setScheme("ftp");
        if (null === $this->getAuthenticator()->getPort()) {
            $this->getAuthenticator()->setPort(21);
        }
    }

    /**
     * Closes this FTP connection.
     *
     * @return FTPClient Returns this FTP client.
     * @throws FTPException Throws a FTP exception if an I/O error occurs.
     */
    public function close() {
        if (false === @ftp_close($this->getConnection())) {
            throw $this->newFTPException("close failed");
        }
        return $this;
    }

    /**
     * Opens this FTP connection.
     *
     * @param int $timeout The timeout.
     * @return FTPClient Returns this FTP client.
     * @throws FTPException Throws a FTP exception if an I/O error occurs.
     */
    public function connect($timeout = 90) {

        $host = $this->getAuthenticator()->getHostname();
        $port = $this->getAuthenticator()->getPort();

        $this->setConnection(@ftp_connect($host, $port, $timeout));
        if (false === $this->getConnection()) {
            throw $this->newFTPException("connection failed");
        }

        return $this;
    }

    /**
     * Deletes a file on the FTP server.
     *
     * @param string $path The file to delete.
     * @return FTPClient Returns this FTP client.
     * @throws FTPException Throws a FTP exception if an I/O error occurs.
     */
    public function delete($path) {
        if (false === @ftp_delete($this->getConnection(), $path)) {
            throw $this->newFTPException(sprintf("delete %s failed", $path));
        }
        return $this;
    }

    /**
     * Logs in to this FTP connection.
     *
     * @return FTPClient Returns this FTP client.
     * @throws FTPException Throws a FTP exception if an I/O error occurs.
     */
    public function login() {

        $username = $this->getAuthenticator()->getPasswordAuthentication()->getUsername();
        $password = $this->getAuthenticator()->getPasswordAuthentication()->getPassword();

        if (false === @ftp_login($this->getConnection(), $username, $password)) {
            throw $this->newFTPException("login failed");
        }

        return $this;
    }

    /**
     * Creates a directory.
     *
     * @param string $directory The directory.
     * @return FTPClient Returns this FTP client.
     * @throws FTPException Throws a FTP exception if an I/O error occurs.
     */
    public function mkdir($directory) {
        if (false === @ftp_mkdir($this->getConnection(), $directory)) {
            throw $this->newFTPException(sprintf("mkdir %s failed", $directory));
        }
        return $this;
    }

    /**
     * Tuns passive mode on or off.
     *
     * @param bool $pasv The passive mode.
     * @return FTPClient Returns this FTP client.
     * @throws FTPException Throws a FTP exception if an I/O error occurs.
     */
    public function pasv($pasv) {
        if (false === @ftp_pasv($this->getConnection(), $pasv)) {
            throw $this->newFTPException(sprintf("pasv from %d to %d failed", !$pasv, $pasv));
        }
        return $this;
    }

    /**
     * Uploads a file to The FTP server.
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $startPos The start position.
     * @return FTPClient Returns this FTP client.
     * @throws FTPException Throws a FTP exception if an I/O error occurs.
     */
    public function put($localFile, $remoteFile, $mode = FTP_IMAGE, $startPos = 0) {
        if (false === @ftp_put($this->getConnection(), $remoteFile, $localFile, $mode, $startPos)) {
            throw $this->newFTPException(sprintf("put %s into %s failed", $localFile, $remoteFile));
        }
        return $this;
    }

    /**
     * Renames a file or a directory on the FTP server.
     *
     * @param string $oldName The old file/directory name.
     * @param string $newName The new name.
     * @return FTPClient Returns this FTP client.
     * @throws FTPException Throws a FTP exception if an I/O error occurs.
     */
    public function rename($oldName, $newName) {
        if (false === @ftp_rename($this->getConnection(), $oldName, $newName)) {
            throw $this->newFTPException(sprintf("rename %s into %s failed", $oldName, $newName));
        }
        return $this;
    }

    /**
     * Removes a directory.
     *
     * @param string $directory The directory.
     * @return FTPClient Returns this FTP client.
     * @throws FTPException Throws a FTP exception if an I/O error occurs.
     */
    public function rmdir($directory) {
        if (false === @ftp_rmdir($this->getConnection(), $directory)) {
            throw $this->newFTPException(sprintf("rmdir %s failed", $directory));
        }
        return $this;
    }
}
