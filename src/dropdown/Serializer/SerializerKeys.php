<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Dropdown\Serializer;

use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;

/**
 * Serializer keys interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Dropdown\Serializer
 */
interface SerializerKeys extends BaseSerializerKeys {

    /**
     * Serializer key "by default".
     *
     * @var string
     */
    const BY_DEFAULT = "byDefault";
}
