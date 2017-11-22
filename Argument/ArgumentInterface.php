<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

/**
 * Argument interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
interface ArgumentInterface {

	/**
	 * Type "Array".
	 */
	const TYPE_ARRAY = 63;

	/**
	 * Type "Boolean".
	 */
	const TYPE_BOOLEAN = 64;

	/**
	 * Type "Date".
	 */
	const TYPE_DATE = 30;

	/**
	 * Type "Double".
	 */
	const TYPE_DOUBLE = 59;

	/**
	 * Type "Float".
	 */
	const TYPE_FLOAT = 54;

	/**
	 * Type "Integer".
	 */
	const TYPE_INTEGER = 78;

	/**
	 * Type "Number".
	 */
	const TYPE_NUMBER = 73;

	/**
	 * Type "Object".
	 */
	const TYPE_OBJECT = 55;

	/**
	 * Type "Resource".
	 */
	const TYPE_RESOURCE = 104;

	/**
	 * Type "String".
	 */
	const TYPE_STRING = 87;

	/**
	 * Type "Timestamp".
	 */
	const TYPE_TIMESTAMP = 116;

}
