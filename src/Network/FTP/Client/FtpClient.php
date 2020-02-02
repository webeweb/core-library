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
     * Changes to the parent directory.
     *
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function cdup() {

        if (false === @ftp_cdup($this->getConnection())) {
            throw $this->newFtpException("ftp_cdup failed");
        }

        return $this;
    }

    /**
     * Changes the current directory on a FTP server.
     *
     * @param string $directory The directory.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function chdir($directory) {

        if (false === @ftp_chdir($this->getConnection(), $directory)) {
            throw $this->newFtpException("ftp_chdir failed: [${directory}]");
        }

        return $this;
    }

    /**
     * Set permissions on a file via FTP.
     *
     * @param int $mode The mode.
     * @param string $filename The filename.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function chmod($mode, $filename) {

        if (false === @ftp_chmod($this->getConnection(), $mode, $filename)) {
            throw $this->newFtpException("ftp_chmod failed: [${mode}, ${filename}]");
        }

        return $this;
    }

    /**
     * Closes an FTP connection.
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
     * Opens an FTP connection.
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
            throw $this->newFtpException("ftp_connect failed: [${host}, ${port}, {$timeout}]");
        }

        return $this;
    }

    /**
     * Deletes a file on the FTP server.
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
     * Downloads a file from the FTP server and saves to an open file.
     *
     * @param resource $localStream The local stream.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $resumePos The resume position.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function fget($localStream, $remoteFile, $mode = FTP_BINARY, $resumePos = 0) {

        if (false === @ftp_fget($this->getConnection(), $localStream, $remoteFile, $mode, $resumePos)) {
            throw $this->newFtpException("ftp_fget failed: [${localStream}, ${remoteFile}, ${mode}, ${resumePos}]");
        }

        return $this;
    }

    /**
     * Uploads from an open file to the FTP server.
     *
     * @param string $remoteFile The remote file.
     * @param resource $localStream The local stream.
     * @param int $mode The mode.
     * @param int $startPos The start position.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function fput($remoteFile, $localStream, $mode = FTP_BINARY, $startPos = 0) {

        if (false === @ftp_fput($this->getConnection(), $remoteFile, $localStream, $mode, $startPos)) {
            throw $this->newFtpException("ftp_fput failed: [${remoteFile}, ${localStream}, ${mode}, ${startPos}]");
        }

        return $this;
    }

    /**
     * Downloads a file from the FTP server.
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $resumePos The resume position.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function get($localFile, $remoteFile, $mode = FTP_BINARY, $resumePos = 0) {

        if (false === @ftp_get($this->getConnection(), $localFile, $remoteFile, $mode, $resumePos)) {
            throw $this->newFtpException("ftp_get failed: [${localFile}, ${remoteFile}, ${mode}, ${remoteFile}]");
        }

        return $this;
    }

    /**
     * Logs in to an FTP connection.
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
     * Returns the last modified time of the given file.
     *
     * @param string $remoteFile The remote file.
     * @return int Returns the last modified time of the given file.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function mdtm($remoteFile) {

        $result = @ftp_mdtm($this->getConnection(), $remoteFile);
        if (false === $result) {
            throw $this->newFtpException("ftp_mdtm failed: [${remoteFile}]");
        }

        return $result;
    }

    /**
     * Creates a directory.
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
     * Returns a list of files in the given directory.
     *
     * @param string $directory The directory.
     * @return array Returns a list of files in the given directory.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function mlsd($directory) {

        $result = @ftp_mlsd($this->getConnection(), $directory);
        if (false === $result) {
            throw $this->newFtpException("ftp_mlsd failed: [${directory}]");
        }

        return $result;
    }

    /**
     * Retrieves a file from the FTP server and writes it to an open file (non-blocking).
     *
     * @param resource $localStream The local stream.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $resumePos The resume position.
     * @return int
     */
    public function nbFget($localStream, $remoteFile, $mode = FTP_BINARY, $resumePos = 0) {
        return @ftp_nb_fget($this->getConnection(), $localStream, $remoteFile, $mode, $resumePos);
    }

    /**
     * Stores a file from an open file to the FTP server (non-blocking).
     *
     * @param string $remoteFile The remote file.
     * @param resource $localStream The local stream.
     * @param int $mode The mode.
     * @param int $startPos The start position.
     * @return int
     */
    public function nbFput($remoteFile, $localStream, $mode = FTP_BINARY, $startPos = 0) {
        return @ftp_nb_fput($this->getConnection(), $remoteFile, $localStream, $mode, $startPos);
    }

    /**
     * Retrieves a file from the FTP server and writes it to a local file (non-blocking).
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $resumePos The resume position.
     * @return int
     */
    public function nbGet($localFile, $remoteFile, $mode = FTP_BINARY, $resumePos = 0) {
        return @ftp_nb_get($this->getConnection(), $localFile, $remoteFile, $mode, $resumePos);
    }

    /**
     * Stores a file from an open file to the FTP server (non-blocking).
     *
     * @param string $remoteFile The remote file.
     * @param string $localFile The local file.
     * @param int $mode The mode.
     * @param int $startPos The start position.
     * @return int
     */
    public function nbPut($remoteFile, $localFile, $mode = FTP_BINARY, $startPos = 0) {
        return @ftp_nb_put($this->getConnection(), $remoteFile, $localFile, $mode, $startPos);
    }

    /**
     * Returns a list of files in the given directory.
     *
     * @param string $directory The directory.
     * @return string[] Returns a list of files in the given directory.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function nlist($directory) {

        $result = @ftp_nlist($this->getConnection(), $directory);
        if (false === $result) {
            throw $this->newFtpException("ftp_nlist failed: [${directory}]");
        }

        return $result;
    }

    /**
     * Turns passive mode on or off.
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
     * Uploads a file to the FTP server.
     *
     * @param string $localFile The local file.
     * @param string $remoteFile The remote file.
     * @param int $mode The mode.
     * @param int $startPos The start position.
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function put($localFile, $remoteFile, $mode = FTP_BINARY, $startPos = 0) {

        if (false === @ftp_put($this->getConnection(), $remoteFile, $localFile, $mode, $startPos)) {
            throw $this->newFtpException("ftp_put failed: [${remoteFile}, ${localFile}, ${mode}, ${startPos}]");
        }

        return $this;
    }

    /**
     * Returns the current directory name.
     *
     * @return FtpClient Returns this FTP client.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function pwd() {

        if (false === @ftp_pwd($this->getConnection())) {
            throw $this->newFtpException("ftp_pwd failed");
        }

        return $this;
    }

    /**
     * Returns a detailed list of files in the given directory.
     *
     * @param string $directory The directory.
     * @param bool $recursive Recursive ?
     * @return array Returns a detailed list of files in the given directory.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function rawList($directory, $recursive = false) {

        $result = @ftp_rawList($this->getConnection(), $directory, $recursive);
        if (false === $result) {
            throw $this->newFtpException("ftp_nlist failed: [${directory}, ${recursive}]");
        }

        return $result;
    }

    /**
     * Renames a file or a directory on the FTP server.
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
     * Removes a directory.
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

    /**
     * Returns the size of the given file.
     *
     * @param string $remoteFile The remote file.
     * @return int Returns the size of the given file.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function size($remoteFile) {

        $result = @ftp_size($this->getConnection(), $remoteFile);
        if (-1 === $result) {
            throw $this->newFtpException("ftp_size failed: [${remoteFile}]");
        }

        return $result;
    }

    /**
     * Returns the system type identifier of the remote FTP server.
     *
     * @return string Returns the system type identifier of the remote FTP server.
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function systype() {

        $result = @ftp_systype($this->getConnection());
        if (false === $result) {
            throw $this->newFtpException("ftp_systype failed");
        }

        return $result;
    }
}
