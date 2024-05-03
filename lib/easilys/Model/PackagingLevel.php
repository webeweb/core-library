<?php

declare(strict_types=1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Model;

use WBW\Library\Common\Traits\Integers\IntegerIdTrait;

/**
 * Packaging level.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class PackagingLevel {

    use IntegerIdTrait {
        setId as public;
    }

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
