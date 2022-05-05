<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Fixtures\Helper;

use WBW\Library\Billing\Helper\BillableHelper;
use WBW\Library\Billing\Model\BillableInterface;

/**
 * Test billable helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Fixtures\Helper
 */
class TestBillableHelper extends BillableHelper {

    /**
     * {@inheritdoc}
     */
    public static function calcTotal(BillableInterface $billable, string $method): float {
        return parent::calcTotal($billable, $method);
    }
}
