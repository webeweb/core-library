<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Fixtures\Helper\Billing;

use WBW\Library\Common\Helper\Billing\BillableHelper;
use WBW\Library\Common\Model\Billing\BillableInterface;

/**
 * Test billable helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Helper\Billing
 */
class TestBillableHelper extends BillableHelper {

    /**
     * {@inheritDoc}
     */
    public static function calcTotal(BillableInterface $billable, string $method): float {
        return parent::calcTotal($billable, $method);
    }
}
