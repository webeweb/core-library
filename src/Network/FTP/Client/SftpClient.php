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
     * @var resource
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
     * Close.
     *
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function close() {

        if (false === ssh2_exec($this->getConnection(), "exit")) {
            throw $this->newFtpException("ssh2_exec failed: [exit]");
        }

        return $this;
    }

    /**
     * Connect.
     *
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function connect() {

        $host = $this->getAuthenticator()->getHostname();
        $port = $this->getAuthenticator()->getPort();

        $this->setConnection(ssh2_connect($host, $port));
        if (false === $this->getConnection()) {
            throw $this->newFtpException("ssh2_connect failed: [{$host}, {$port}]");
        }

        return $this;
    }

    /**
     * Delete.
     *
     * @param string $path The path.
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function delete($path) {

        if (false === ssh2_sftp_unlink($this->getSftp(), $path)) {
            throw $this->newFtpException("ssh2_sftp_unlink failed: [{$path}]");
        }

        return $this;
    }

    /**
     * Get a file.
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @return SftpClient Returns this SFTP client.
     */
    public function get($localFile, $remoteFile) {

        $input  = fopen("ssh2.sftp://" . intval($this->getSftp()) . $remoteFile, "r");
        $output = fopen($localFile, "w");

        stream_copy_to_stream($input, $output);

        fclose($input);
        fclose($output);

        return $this;
    }

    /**
     * Get the SFTP resource.
     *
     * @return resource Returns the SFTP resource.
     */
    private function getSftp() {

        if (null === $this->sftp) {
            $this->sftp = ssh2_sftp($this->getConnection());
        }

        return $this->sftp;
    }

    /**
     * Login.
     *
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function login() {

        $username = $this->getAuthenticator()->getPasswordAuthentication()->getUsername();
        $password = $this->getAuthenticator()->getPasswordAuthentication()->getPassword();

        if (false === ssh2_auth_password($this->getConnection(), $username, $password)) {
            throw $this->newFtpException("ssh2_auth_password failed: [{$username}]");
        }

        return $this;
    }

    /**
     * Make a directory.
     *
     * @param string $directory The directory.
     * @param int $mode The mode.
     * @param bool $recursive Recursively ?.
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function mkdir($directory, $mode = 0777, $recursive = false) {

        if (false === ssh2_sftp_mkdir($this->getSftp(), $directory, $mode, $recursive)) {
            throw $this->newFtpException("ssh2_sftp_mkdir failed: [{$directory}]");
        }

        return $this;
    }

    /**
     * Put a file.
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @return SftpClient Returns this SFTP client.
     */
    public function put($localFile, $remoteFile) {

        $input  = fopen($localFile, "r");
        $output = fopen("ssh2.sftp://" . intval($this->getSftp()) . $remoteFile, "w");

        stream_copy_to_stream($input, $output);

        fclose($input);
        fclose($output);

        return $this;
    }

    /**
     * Rename.
     *
     * @param string $oldName The old name.
     * @param string $newName The new name.
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function rename($oldName, $newName) {

        if (false === ssh2_sftp_rename($this->getSftp(), $oldName, $newName)) {
            throw $this->newFtpException("ssh2_sftp_rename failed: [{$oldName}, {$newName}]");
        }

        return $this;
    }

    /**
     * Remove a directory.
     *
     * @param string $directory The directory.
     * @return SftpClient Returns this SFTP client.
     * @throws FtpException Throws a FTP exception if an I/O error occurs.
     */
    public function rmdir($directory) {

        if (false === ssh2_sftp_rmdir($this->getSftp(), $directory)) {
            throw $this->newFtpException("ssh2_sftp_rmdir failed: [{$directory}]");
        }

        return $this;
    }
}
