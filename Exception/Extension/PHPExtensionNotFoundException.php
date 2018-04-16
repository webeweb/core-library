<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Extension;

use Exception;
use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * PHP extension not found exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Extension
 */
class PHPExtensionNotFoundException extends AbstractCoreException {

    /**
     * Constructor.
     *
     * @param string $extension The extension.
     * @param Exception $previous The previous exception.
     */
    public function __construct($extension, Exception $previous = null) {
        parent::__construct(sprintf("The PHP extension \"%s\" is not found", $extension), $previous);
    }

}
