<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model;

use WBW\Library\Core\Model\Attribute\FloatXTrait;
use WBW\Library\Core\Model\Attribute\FloatYTrait;

/**
 * Point trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model
 */
trait PointTrait {

    use FloatXTrait;
    use FloatYTrait;
}
