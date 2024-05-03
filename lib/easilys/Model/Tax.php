<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Model;

use WBW\Library\Common\Traits\Floats\FloatValueTrait;
use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;

/**
 * Tax.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Tax {

    use FloatValueTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use StringLabelTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}