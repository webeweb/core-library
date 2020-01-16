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
 * FTP client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\FTP\Client
 */
class FtpClient extends AbstractFtpClient {

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
     * Close.
     *
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function close() {

        if (false === @ftp_close($this->getConnection())) {
            throw $this->newFtpException("ftp_close failed");
        }

        return $this;
    }

    /**
     * Connect.
     *
     * @param int $timeout The timeout.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function connect($timeout = 90) {

        $host = $this->getAuthenticator()->getHostname();
        $port = $this->getAuthenticator()->getPort();

        $this->setConnection(@ftp_connect($host, $port, $timeout));
        if (false === $this->getConnection()) {
            throw $this->newFtpException("ftp_connect failed: [${host}, ${port}]");
        }

        return $this;
    }

    /**
     * Delete.
     *
     * @param string $path The path.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function delete($path) {

        if (false === @ftp_delete($this->getConnection(), $path)) {
            throw $this->newFtpException("ftp_delete failed: [${path}]");
        }

        return $this;
    }

    /**
     * Get a file.
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function get($localFile, $remoteFile) {

        if (false === @ftp_get($this->getConnection(), $localFile, $remoteFile)) {
            throw $this->newFtpException("ftp_get failed: [${localFile}, ${remoteFile}]");
        }

        return $this;
    }

    /**
     * Login.
     *
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function login() {

        $username = $this->getAuthenticator()->getPasswordAuthentication()->getUsername();
        $password = $this->getAuthenticator()->getPasswordAuthentication()->getPassword();

        if (false === @ftp_login($this->getConnection(), $username, $password)) {
            throw $this->newFtpException("ftp_login failed: [${username}]");
        }

        return $this;
    }

    /**
     * Make a directory.
     *
     * @param string $directory The directory.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function mkdir($directory) {

        if (false === @ftp_mkdir($this->getConnection(), $directory)) {
            throw $this->newFtpException("mkdir failed: [${directory}]");
        }

        return $this;
    }

    /**
     * Set the passive mode.
     *
     * @param bool $pasv The passive mode.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function pasv($pasv) {

        if (false === @ftp_pasv($this->getConnection(), $pasv)) {
            throw $this->newFtpException("ftp_pasv failed: [${pasv}]");
        }

        return $this;
    }

    /**
     * Put a file.
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $startPos The start position.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function put($localFile, $remoteFile, $mode = FTP_IMAGE, $startPos = 0) {

        if (false === @ftp_put($this->getConnection(), $remoteFile, $localFile, $mode, $startPos)) {
            throw $this->newFtpException("ftp_put failed: [${remoteFile}, ${localFile}]");
        }

        return $this;
    }

    /**
     * Rename.
     *
     * @param string $oldName The old name.
     * @param string $newName The new name.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function rename($oldName, $newName) {

        if (false === @ftp_rename($this->getConnection(), $oldName, $newName)) {
            throw $this->newFtpException("ftp_rename failed: [${oldName}, ${newName}]");
        }

        return $this;
    }

    /**
     * Remove a directory.
     *
     * @param string $directory The directory.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function rmdir($directory) {

        if (false === @ftp_rmdir($this->getConnection(), $directory)) {
            throw $this->newFtpException("ftp_rmdir failed: [${directory}]");
        }

        return $this;
    }
}
