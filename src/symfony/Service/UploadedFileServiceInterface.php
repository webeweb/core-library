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

use Exception;
use SplFileInfo;

/**
 * Uploaded file service interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Service
 */
interface UploadedFileServiceInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.service.uploaded_file";

    /**
     * Determines if a filename exists.
     *
     * @param string $filename The filename.
     * @return bool Returns true in case of success, false otherwise.
     */
    public function exists(string $filename): bool;

    /**
     * Get the directory.
     *
     * @return string|null Returns the directory.
     */
    public function getDirectory(): ?string;

    /**
     * Path.
     *
     * @param string $filename The filename.
     * @return string Returns the path.
     */
    public function path(string $filename): string;

    /**
     * Save.
     *
     * @param SplFileInfo $uploadedFile The uploaded file.
     * @param string $subdirectory The subdirectory.
     * @param string|null $filename The filename.
     * @return string|null Returns the uploaded file path.
     */
    public function save(SplFileInfo $uploadedFile, string $subdirectory, string $filename = null): ?string;

    /**
     * Unique id.
     *
     * @return string Returns the unique id.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function uniqid(): string;

    /**
     * Unlink.
     *
     * @param string $filename The filename.
     * @return bool|null Returns true in case of success, false otherwise.
     */
    public function unlink(string $filename): ?bool;
}
