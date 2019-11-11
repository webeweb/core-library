<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument\Helper;

use WBW\Library\Core\Argument\Exception\ResourceArgumentException;

/**
 * Resource helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument\Helper
 */
class ResourceHelper {

    /**
     * Determines if a value is a resource.
     *
     * @param mixed $value The value.
     * @return void
     * @throws ResourceArgumentException Throws a Resource argument exception if the value is not of expected type.
     */
    public static function isResource($value) {
        if (false === is_resource($value)) {
            throw new ResourceArgumentException($value);
        }
    }
}
