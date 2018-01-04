<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Hook;

use Exception;
use WBW\Library\Core\Exception\AbstractWBWException;

/**
 * Hook class not found exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Hook
 * @final
 */
final class HookClassNotFoundException extends AbstractWBWException {

	/**
	 * Constructor.
	 *
	 * @param string $classname The classname.
	 * @param Exception $previous The previous exception.
	 */
	public function __construct($classname, Exception $previous = null) {
		parent::__construct(sprintf("The hook class \"%s\" is not found", $classname), $previous);
	}

}
