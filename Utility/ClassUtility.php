<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility;

use ReflectionClass;

/**
 * Class utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class ClassUtility {

    /**
     * Get the short class name.
     *
     * @param mixed $classname The class name or object.
     * @return string Returns the short class name.
     */
    public static function getShortName($classname) {
        return (new ReflectionClass($classname))->getShortName();
    }

}
