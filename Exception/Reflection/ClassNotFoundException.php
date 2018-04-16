<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Reflection;

use Exception;
use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * Class not found exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Reflection
 */
class ClassNotFoundException extends AbstractCoreException {

    /**
     * Constructor.
     *
     * @param string $classname The classname.
     * @param Exception $previous The previous exception.
     */
    public function __construct($classname, Exception $previous = null) {
        parent::__construct(sprintf("The class \"%s\" is not found", $classname), $previous);
    }

}
