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
     * @param string $basename The basename.
     * @return string|null Returns the uploaded file path.
     */
    public function save(SplFileInfo $uploadedFile, string $subdirectory, string $basename): ?string {

        // Directory
        $dir = implode("", [
            $this->getDirectory(),
            self::UPLOAD_DIRECTORY,
            $subdirectory,
        ]);

        // Filename
        $new = implode(".", [
            $basename,
            $uploadedFile->getExtension(),
        ]);

        // Destination
        $dst = implode(DIRECTORY_SEPARATOR, [
            $dir,
            $new,
        ]);

        if (false === $this->mkdir($dir) || false === rename($uploadedFile->getPathname(), $dst)) {
            return null;
        }

        return str_replace($this->getDirectory(), "", $dst);
    }
}
