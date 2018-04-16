<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\IO;

/**
 * File interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\IO
 */
interface FileInterface {

    /**
     * File size divider.
     *
     * @var integer
     */
    const FILE_SIZE_DIVIDER = 1000;

    /**
     * File size unit "Byte".
     *
     * @var string
     */
    const FILE_SIZE_UNIT_B = "B";

    /**
     * File size unit "Exabyte".
     *
     * @var string
     */
    const FILE_SIZE_UNIT_EB = "EB";

    /**
     * File size unit "Kilobyte".
     *
     * @var string
     */
    const FILE_SIZE_UNIT_KB = "KB";

    /**
     * File size unit "Gigabyte".
     *
     * @var string
     */
    const FILE_SIZE_UNIT_GB = "GB";

    /**
     * File size unit "Megabyte".
     *
     * @var string
     */
    const FILE_SIZE_UNIT_MB = "MB";

    /**
     * File size unit "Petabyte".
     *
     * @var string
     */
    const FILE_SIZE_UNIT_PB = "PB";

    /**
     * File size unit "Terabyte".
     *
     * @var string
     */
    const FILE_SIZE_UNIT_TB = "TB";

    /**
     * File size unit "Yottabyte".
     *
     * @var string
     */
    const FILE_SIZE_UNIT_YB = "YB";

    /**
     * File size unit "Zettabyte".
     *
     * @var string
     */
    const FILE_SIZE_UNIT_ZB = "ZB";

}
