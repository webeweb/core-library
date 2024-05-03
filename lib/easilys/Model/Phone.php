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

use WBW\Library\Easilys\Traits\Booleans\BooleanIsMainTrait;
use WBW\Library\Easilys\Traits\Strings\StringContextTrait;
use WBW\Library\Common\Traits\Strings\StringIdTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Common\Traits\Strings\StringNumberTrait;
use WBW\Library\Common\Traits\Strings\StringTypeTrait;

/**
 * Phone.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Phone {

    use BooleanIsMainTrait;
    use StringContextTrait;
    use StringIdTrait;
    use StringLabelTrait;
    use StringNumberTrait;
    use StringTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
