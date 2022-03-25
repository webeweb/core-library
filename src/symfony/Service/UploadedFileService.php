<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Service;

use SplFileInfo;
use WBW\Library\Traits\Strings\StringDirectoryTrait;

/**
 * Uploaded file service.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Service
 */
class UploadedFileService {

    use StringDirectoryTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.service.uploaded_file";

    /**
     * Upload directory.
     *
     * @var string
     */
    const UPLOAD_DIRECTORY = "/uploads";

    /**
     * Constructor.
     *
     * @param string $directory The directory.
     */
    public function __construct(string $directory) {
        $this->setDirectory($directory);
    }

    /**
     * Creates a directory.
     *
     * @param string $directory The directory.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function mkdir(string $directory): bool {

        if (true === file_exists($directory)) {
            return true;
        }

        return mkdir($directory, 0755, true);
    }

    /**
     * Save.
     *
     * @param SplFileInfo $uploadedFile The uploaded file.
     * @param string $subdirectory The subdirectory.
     * @param string|null $filename The filename.
     * @return string|null Returns the uploaded file path.
     */
    public function save(SplFileInfo $uploadedFile, string $subdirectory, string $filename = null): ?string {

        // Directory
        $dir = implode("", [
            $this->getDirectory(),
            self::UPLOAD_DIRECTORY,
            $subdirectory,
        ]);

        // Destination
        $dst = implode(DIRECTORY_SEPARATOR, [
            $dir,
            null !== $filename ? $filename : $uploadedFile->getFilename(),
        ]);

        if (false === $this->mkdir($dir) || false === rename($uploadedFile->getPathname(), $dst)) {
            return null;
        }

        return str_replace($this->getDirectory(), "", $dst);
    }

    /**
     * Unlink.
     *
     * @param string $filename The filename.
     * @return bool|null Returns true in case of success, false otherwise.
     */
    public function unlink(string $filename): ?bool {

        $pathname = implode(DIRECTORY_SEPARATOR, [
            $this->getDirectory(),
            $filename,
        ]);

        if (true === file_exists($pathname)) {
            return unlink($pathname);
        }

        return null;
    }
}
