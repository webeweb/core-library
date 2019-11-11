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
 * SFTP client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\FTP\Client
 */
class SftpClient extends AbstractFtpClient {

    /**
     * SFTP resource.
     *
     * @var mixed
     */
    private $sftp;

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     */
    public function __construct(Authenticator $authenticator) {
        parent::__construct($authenticator);

        $this->getAuthenticator()->setScheme("sftp");
        if (null === $this->getAuthenticator()->getPort()) {
            $this->getAuthenticator()->setPort(22);
        }
    }

    /**
     * Closes this SFTP connection.
     *
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function close() {
        if (false === ssh2_exec($this->getConnection(), "exit")) {
            throw $this->newFTPException("close failed");
        }
        return $this;
    }

    /**
     * Opens this SFTP connection.
     *
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function connect() {

        $host = $this->getAuthenticator()->getHostname();
        $port = $this->getAuthenticator()->getPort();

        $this->setConnection(ssh2_connect($host, $port));
        if (false === $this->getConnection()) {
            throw $this->newFTPException("connection failed");
        }

        return $this;
    }

    /**
     * Deletes a file on the SFTP server.
     *
     * @param string $path The file to delete.
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function delete($path) {
        if (false === ssh2_sftp_unlink($this->getSftp(), $path)) {
            throw $this->newFTPException(sprintf("delete %s failed", $path));
        }
        return $this;
    }

    /**
     * Get the SFTP resource.
     *
     * @return mixed Returns the SFTP resource.
     */
    private function getSftp() {
        if (null === $this->sftp) {
            $this->sftp = ssh2_sftp($this->getConnection());
        }
        return $this->sftp;
    }

    /**
     * Logs in to this SFTP connection.
     *
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function login() {

        $username = $this->getAuthenticator()->getPasswordAuthentication()->getUsername();
        $password = $this->getAuthenticator()->getPasswordAuthentication()->getPassword();

        if (false === ssh2_auth_password($this->getConnection(), $username, $password)) {
            throw $this->newFTPException("login failed");
        }

        return $this;
    }

    /**
     * Creates a directory.
     *
     * @param string $directory The directory.
     * @param int $mode The mode.
     * @param bool $recursive Recursively ?.
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function mkdir($directory, $mode = 0777, $recursive = false) {
        if (false === ssh2_sftp_mkdir($this->getSftp(), $directory, $mode, $recursive)) {
            throw $this->newFTPException(sprintf("mkdir %s failed", $directory));
        }
        return $this;
    }

    /**
     * Uploads a file to the SFTP server.
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @return SftpClient Returns this SFTP client.
     */
    public function put($localFile, $remoteFile) {
        $stream = fopen("ssh2.sftp://" . intval($this->getSftp()) . $remoteFile, "w");
        fwrite($stream, file_get_contents($localFile));
        fclose($stream);
        return $this;
    }

    /**
     * Renames a file or a directory on the SFTP server.
     *
     * @param string $oldName The old file/directory name.
     * @param string $newName The new name.
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function rename($oldName, $newName) {
        if (false === ssh2_sftp_rename($this->getSftp(), $oldName, $newName)) {
            throw $this->newFTPException(sprintf("rename %s into %s failed", $oldName, $newName));
        }
        return $this;
    }

    /**
     * Removes a directory.
     *
     * @param string $directory The directory.
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function rmdir($directory) {
        if (false === ssh2_sftp_rmdir($this->getSftp(), $directory)) {
            throw $this->newFTPException(sprintf("rmdir %s failed", $directory));
        }
        return $this;
    }
}
