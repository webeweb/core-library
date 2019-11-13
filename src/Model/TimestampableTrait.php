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

use WBW\Library\Core\Model\Attribute\DateTimeCreatedAtTrait;
use WBW\Library\Core\Model\Attribute\DateTimeUpdatedAtTrait;

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
