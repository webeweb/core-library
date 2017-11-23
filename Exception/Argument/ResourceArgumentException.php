<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Argument;

/**
 * Resource argument exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception
 * @final
 */
final class ResourceArgumentException extends IllegalArgumentException {

	/**
	 * Constructor.
	 *
	 * @param $argument The argument.
	 */
	public function __construct($argument) {
		parent::__construct("The argument \"" . print_r($argument, true) . "\" is not a resource");
	}

}
