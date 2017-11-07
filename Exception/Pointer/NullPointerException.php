<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Pointer;

use Exception;

/**
 * Null pointer exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Pointer
 * @final
 */
final class NullPointerException extends AbstractSDKException {

	/**
	 * Constructor.
	 *
	 * @param string $message The message.
	 * @param Exception $previous The previous exception.
	 */
	public function __construct($message, Exception $previous = null) {
		parent::__construct($message, $previous);
	}

}
