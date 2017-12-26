<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\File;

/**
 * File size interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\File
 */
interface FileSizeInterface {

	/**
	 * File size "Byte".
	 *
	 * @var string
	 */
	const FILE_SIZE_B = "B";

	/**
	 * File size "Exabyte".
	 *
	 * @var string
	 */
	const FILE_SIZE_EB = "EB";

	/**
	 * File size "Kilobyte".
	 *
	 * @var string
	 */
	const FILE_SIZE_KB = "KB";

	/**
	 * File size "Gigabyte".
	 *
	 * @var string
	 */
	const FILE_SIZE_GB = "GB";

	/**
	 * File size "Megabyte".
	 *
	 * @var string
	 */
	const FILE_SIZE_MB = "MB";

	/**
	 * File size "Petabyte".
	 *
	 * @var string
	 */
	const FILE_SIZE_PB = "PB";

	/**
	 * File size "Terabyte".
	 *
	 * @var string
	 */
	const FILE_SIZE_TB = "TB";

	/**
	 * File size "Yottabyte".
	 *
	 * @var string
	 */
	const FILE_SIZE_YB = "YB";

	/**
	 * File size "Zettabyte".
	 *
	 * @var string
	 */
	const FILE_SIZE_ZB = "ZB";

}
