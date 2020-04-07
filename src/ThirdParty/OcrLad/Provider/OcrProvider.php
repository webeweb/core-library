<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\OcrLad\Provider;

use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use WBW\Library\Core\Model\Attribute\StringHostnameTrait;
use WBW\Library\Core\Model\Attribute\StringPasswordTrait;
use WBW\Library\Core\Model\Attribute\StringUsernameTrait;
use WBW\Library\Core\Network\FTP\Client\FtpClient;
use WBW\Library\Core\Network\FTP\Exception\FtpException;
use WBW\Library\Core\Security\Authenticator;
use WBW\Library\Core\Security\PasswordAuthentication;
use WBW\Library\Core\ThirdParty\OcrLad\Model\IOFile;

/**
 * OCR provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\OcrLad\Provider
 */
class OcrProvider {

    use LoggerAwareTrait;
    use StringHostnameTrait;
    use StringPasswordTrait;
    use StringUsernameTrait;

    /**
     * FTP client.
     *
     * @var FtpClient
     */
    private $ftpClient;

    /**
     * Local directory "after".
     *
     * @var string
     */
    private $localDirectoryAfter;

    /**
     * Local directory "before".
     *
     * @var string
     */
    private $localDirectoryBefore;

    /**
     * Local directory "error".
     *
     * @var string
     */
    private $localDirectoryError;

    /**
     * Remote directory "after".
     *
     * @var string
     */
    private $remoteDirectoryAfter;

    /**
     * Remote directory "before".
     *
     * @var string
     */
    private $remoteDirectoryBefore;

    /**
     * Remote directory "error".
     *
     * @var string
     */
    private $remoteDirectoryError;

    /**
     * Constructor.
     *
     * @param LoggerInterface $logger The logger.
     */
    public function __construct(LoggerInterface $logger) {
        $this->setLogger($logger);
        $this->setRemoteDirectoryAfter("/Apres");
        $this->setRemoteDirectoryBefore("/Avant");
        $this->setRemoteDirectoryError("/Erreur");
    }

    /**
     * Destructor.
     *
     * @throws FtpException Throws a FTP exception if an error occurs.
     */
    public function __destruct() {

        if (null !== $this->ftpClient) {

            $this->getLogger()->info("OCR provider closes the FTP connection", ["_hostname" => $this->getHostname()]);
            $this->ftpClient->close();
            $this->ftpClient = null;
        }
    }

    /**
     * Build the file paths.
     *
     * @param IOFile $file The file.
     * @return array Returns the file paths.
     */
    protected function buildFilePaths(IOFile $file) {
        return [
            "upload" => implode("/", [$this->getRemoteDirectoryBefore(), $file->getUniqFilenamePdf()]),
            "remote" => [
                implode("/", [$this->getRemoteDirectoryAfter(), $file->getUniqFilenameDer()]),
                implode("/", [$this->getRemoteDirectoryAfter(), $file->getUniqFilenamePdf()]),
                implode("/", [$this->getRemoteDirectoryAfter(), $file->getUniqFilenameXml()]),
            ],
            "local"  => [
                implode("/", [$this->getLocalDirectoryAfter(), $file->getUniqFilenameDer()]),
                implode("/", [$this->getLocalDirectoryAfter(), $file->getUniqFilenamePdf()]),
                implode("/", [$this->getLocalDirectoryAfter(), $file->getUniqFilenameXml()]),
            ],
        ];
    }

    /**
     * Delete the remote files.
     *
     * @param IOFile $file The I/O file.
     * @return void
     * @throws FtpException Throws an FTP exception if an error occurs.
     */
    public function deleteRemoteFiles(IOFile $file) {

        $provider = $this;

        /**
         * Delete closure.
         *
         * @param string $directory The directory.
         * @return void
         */
        $deleteClosure = function($directory) use ($provider, $file) {

            $paths = $provider->buildFilePaths($file);

            $provider->getLogger()->info("OCR provider list files in a given directory", ["_directory" => $directory]);

            $files = $provider->getFtpClient()->nlist($directory);
            foreach ($files as $current) {

                if (false === in_array($current, $paths["remote"])) {
                    continue;
                }

                $provider->getLogger()->info("OCR provider deletes a file on the FTP server", ["_remote" => $current]);
                $provider->getFtpClient()->delete($current);
            }
        };

        $deleteClosure($this->getRemoteDirectoryBefore());
        $deleteClosure($this->getRemoteDirectoryAfter());
        $deleteClosure($this->getRemoteDirectoryError());
    }

    /**
     * Get the FTP client.
     *
     * @return FtpClient Returns the FTP client.
     * @throws FtpException Throws an FTP exception if an error occurs.
     */
    public function getFtpClient() {

        if (null === $this->ftpClient) {

            $authentication = new PasswordAuthentication($this->getUsername(), $this->getPassword());
            $authenticator  = new Authenticator($this->getHostname(), $authentication);

            $this->ftpClient = new FtpClient($authenticator);

            $this->getLogger()->info("OCR provider opens an FTP connection to FTP", ["_hostname" => $this->getHostname()]);
            $this->ftpClient->connect();

            $this->getLogger()->info("OCR provider logs in to the FTP connection", ["_username" => $this->getUsername()]);
            $this->ftpClient->login();

            $this->getLogger()->info("OCR provider turns passive mode on");
            $this->ftpClient->pasv(true);
        }

        return $this->ftpClient;
    }

    /**
     * Get the local directory "after".
     *
     * @return string Returns the local directory "after".
     */
    public function getLocalDirectoryAfter() {
        return $this->localDirectoryAfter;
    }

    /**
     * Get the local directory "before".
     *
     * @return string Returns the local directory "before"
     */
    public function getLocalDirectoryBefore() {
        return $this->localDirectoryBefore;
    }

    /**
     * Get the local directory "error".
     *
     * @return string Returns the local directory "error".
     */
    public function getLocalDirectoryError() {
        return $this->localDirectoryError;
    }

    /**
     * Get the logger.
     *
     * @return LoggerInterface Returns the logger.
     */
    public function getLogger() {
        return $this->logger;
    }

    /**
     * Ge the remote directory "after".
     *
     * @return string Returns the remote directory "after".
     */
    public function getRemoteDirectoryAfter() {
        return $this->remoteDirectoryAfter;
    }

    /**
     * Get the remote directory "before".
     *
     * @return string Returns the remote directory "before".
     */
    public function getRemoteDirectoryBefore() {
        return $this->remoteDirectoryBefore;
    }

    /**
     * Get the remote directory "error".
     *
     * @return string Returns the remote directory "error".
     */
    public function getRemoteDirectoryError() {
        return $this->remoteDirectoryError;
    }

    /**
     * Scan a file.
     *
     * @param IOFile $file The I/O file.
     * @param int $retry The retry count.
     * @param int $wait The waiting time (in seconds) between retries.
     * @return bool Returns true in case of success, false otherwise.
     * @throws FtpException Throws an FTP exception in case of success, false otherwise.
     */
    public function scanFile(IOFile $file, $retry = 30, $wait = 5) {

        $paths = $this->buildFilePaths($file);

        $this->getLogger()->info("OCR provider upload a file to the FTP server", ["_local" => $file->getPathname(), "_remote" => $paths["upload"]]);
        $this->getFtpClient()->put($file->getPathname(), $paths["upload"]);

        $provider = $this;

        /**
         * Download closure.
         *
         * @param string $local The local file.
         * @param string $remote The remote file.
         */
        $downloadClosure = function($local, $remote) use ($provider) {
            $provider->getLogger()->info("OCR provider downloads a file  from the FTP server", ["_local" => $local, "_remote" => $remote]);
            $provider->getFtpClient()->get($local, $remote);
        };

        $result = false;

        for ($i = 0; $i < $retry; ++$i) {

            $files = $this->getFtpClient()->nlist($this->getRemoteDirectoryAfter());
            if (false === in_array($paths["remote"][0], $files)) {

                $this->getLogger()->info("OCR provider is waiting for...", ["_remote" => $paths["remote"][0]]);
                sleep($wait);

                continue;
            }

            $downloadClosure($paths["local"][0], $paths["remote"][0]);
            $downloadClosure($paths["local"][1], $paths["remote"][1]);
            $downloadClosure($paths["local"][2], $paths["remote"][2]);

            $result = true;

            break;
        }

        if (false === $result) {
            $this->getLogger()->info("OCR provider fail to download a file from the FTP server", ["_local" => $paths["local"][0], "_remote" => $paths["remote"][0]]);
            $this->getLogger()->info("OCR provider fail to download a file from the FTP server", ["_local" => $paths["local"][1], "_remote" => $paths["remote"][1]]);
            $this->getLogger()->info("OCR provider fail to download a file from the FTP server", ["_local" => $paths["local"][2], "_remote" => $paths["remote"][2]]);
        }

        return $result;
    }

    /**
     * Set the local directory "after".
     *
     * @param string $localDirectoryAfter The local directory "after".
     * @return OcrProvider Returns this OCR provider.
     */
    public function setLocalDirectoryAfter($localDirectoryAfter) {
        $this->localDirectoryAfter = $localDirectoryAfter;
        return $this;
    }

    /**
     * Set the local directory "before".
     *
     * @param string $localDirectoryBefore The local directory "before"
     * @return OcrProvider Returns this OCR provider.
     */
    public function setLocalDirectoryBefore($localDirectoryBefore) {
        $this->localDirectoryBefore = $localDirectoryBefore;
        return $this;
    }

    /**
     * Set the local directory "error".
     *
     * @param string $localDirectoryError The local directory "error".
     * @return OcrProvider Returns this OCR provider.
     */
    public function setLocalDirectoryError($localDirectoryError) {
        $this->localDirectoryError = $localDirectoryError;
        return $this;
    }

    /**
     * Set the remote directory "after".
     *
     * @param string $remoteDirectoryAfter The remote directory "after".
     * @return OcrProvider Returns this OCR provider.
     */
    public function setRemoteDirectoryAfter($remoteDirectoryAfter) {
        $this->remoteDirectoryAfter = $remoteDirectoryAfter;
        return $this;
    }

    /**
     * Set the remote directory "before".
     *
     * @param string $remoteDirectoryBefore The remote directory "before".
     * @return OcrProvider Returns this OCR provider.
     */
    public function setRemoteDirectoryBefore($remoteDirectoryBefore) {
        $this->remoteDirectoryBefore = $remoteDirectoryBefore;
        return $this;
    }

    /**
     * Set the remote directory "error".
     *
     * @param string $remoteDirectoryError The remote directory "error".
     * @return OcrProvider Returns this OCR provider.
     */
    public function setRemoteDirectoryError($remoteDirectoryError) {
        $this->remoteDirectoryError = $remoteDirectoryError;
        return $this;
    }
}