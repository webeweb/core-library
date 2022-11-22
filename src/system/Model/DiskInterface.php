<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

use JsonSerializable;

/**
 * Disk interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
interface DiskInterface extends JsonSerializable {

    /**
     * Get the available.
     *
     * @return string|null Returns the available.
     */
    public function getAvailable(): ?string;

    /**
     * Get the file system.
     *
     * @return string|null Returns the file system.
     */
    public function getFs(): ?string;

    /**
     * Get the mount.
     *
     * @return string|null Returns the mount.
     */
    public function getMount(): ?string;

    /**
     * Get the percent.
     *
     * @return string|null Returns the percent.
     */
    public function getPercent(): ?string;

    /**
     * Get the used.
     *
     * @return string|null Returns the used.
     */
    public function getUsed(): ?string;
}
