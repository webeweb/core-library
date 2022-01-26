<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Fixtures\Helper;

use WBW\Library\Bill\Helper\BillableHelper;
use WBW\Library\Bill\Model\BillableInterface;

/**
 * Test billable helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Fixtures\Helper
 */
class TestBillableHelper extends BillableHelper {

    /**
     * {@inheritDoc}
     */
    public static function calcTotal(BillableInterface $billable, string $method): float {
        return parent::calcTotal($billable, $method);
    }
}
