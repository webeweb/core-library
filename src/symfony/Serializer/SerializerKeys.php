<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Serializer;

/**
 * Serializer keys.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Serializer
 */
interface SerializerKeys {

    /**
     * Serializer key "entity".
     *
     * @var string
     */
    const ENTITY = "entity";

    /**
     * Serializer key "event".
     *
     * @var string
     */
    const EVENT = "event";

    /**
     * Serializer key "request".
     *
     * @var string
     */
    const REQUEST = "request";

    /**
     * Serializer key "route".
     *
     * @var string
     */
    const ROUTE = "route";
}
