<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model;

use WBW\Library\Traits\DateTimes\DateTimeCreatedAtTrait;
use WBW\Library\Traits\DateTimes\DateTimeUpdatedAtTrait;

/**
 * Timestampable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model
 */
trait TimestampableTrait {

    use DateTimeCreatedAtTrait;
    use DateTimeUpdatedAtTrait;
}
