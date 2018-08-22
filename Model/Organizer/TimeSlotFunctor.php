<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Organizer;

use WBW\Library\Core\Helper\Argument\DateTimeHelper;
use WBW\Library\Core\Sorting\FunctorInterface;

/**
 * Time slot functor.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Organizer
 */
class TimeSlotFunctor implements FunctorInterface {

    /**
     * {@inheritdoc}
     */
    public function compare($a, $b) {
        return DateTimeHelper::isLessThan($a->getStartDate(), $b->getStartDate());
    }

}
