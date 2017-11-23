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
 * Hook method not found exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Hook
 * @final
 */
final class HookMethodNotFoundException extends AbstractWBWException {

	/**
	 * Constructor.
	 *
	 * @param string $method The method.
	 * @param Exception $previous The previous exception.
	 */
	public function __construct($method, Exception $previous = null) {
		parent::__construct("The hook method \"" . $method . "\" is not found", $previous);
	}

}
