<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System;

use WBW\Library\System\Exception\UnsupportedSystemException;
use WBW\Library\System\Helper\SystemHelper;
use WBW\Library\System\Model\HardDiskInterface;
use WBW\Library\System\Model\MemoryInterface;
use WBW\Library\System\Model\NetworkCardInterface;
use WBW\Library\System\Model\NetworkInterface;
use WBW\Library\System\Model\OperatingSystemInterface;
use WBW\Library\System\Model\ProcessorInterface;

/**
 * System.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System
 */
class System {

    /**
     * Get the hard disks.
     *
     * @return HardDiskInterface[] Returns the hard disks.
     * @throws UnsupportedSystemException Throws an unsupported system exception.
     */
    public static function getHardDisks(): array {
        return SystemHelper::retrieveHardDisks();
    }

    /**
     * Get the memory.
     *
     * @return MemoryInterface Returns the memory.
     * @throws UnsupportedSystemException Throws an unsupported system exception.
     */
    public static function getMemory(): MemoryInterface {
        return SystemHelper::retrieveMemory();
    }

    /**
     * Get the network.
     *
     * @return NetworkInterface Returns the network.
     * @throws UnsupportedSystemException Throws an unsupported system exception.
     */
    public static function getNetwork(): NetworkInterface {
        return SystemHelper::retrieveNetwork();
    }

    /**
     * Get the network cards.
     *
     * @return NetworkCardInterface[] Returns the network cards.
     * @throws UnsupportedSystemException Throws an unsupported system exception.
     */
    public static function getNetworkCards(): array {
        return SystemHelper::retrieveNetworkCards();
    }

    /**
     * Get the operating system.
     *
     * @return OperatingSystemInterface Returns the operating system.
     * @throws UnsupportedSystemException Throws an unsupported system exception.
     */
    public static function getOperatingSystem(): OperatingSystemInterface {
        return SystemHelper::retrieveOperatingSystem();
    }

    /**
     * Get the processors.
     *
     * @return ProcessorInterface[] Returns the processors.
     * @throws UnsupportedSystemException Throws an unsupported system exception.
     */
    public static function getProcessors(): array {
        return SystemHelper::retrieveProcessors();
    }

    /**
     * Determines if the operating system is Unix.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isUnix(): bool {
        return SystemHelper::isUnix();
    }

    /**
     * Determines if the operating system is Windows.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function isWindows(): bool {
        return SystemHelper::isWindows();
    }
}
