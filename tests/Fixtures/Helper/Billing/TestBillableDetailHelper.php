<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Fixtures\Helper\Billing;

use WBW\Library\Common\Helper\Billing\BillableDetailHelper;
use WBW\Library\Common\Model\Billing\BillableDetailInterface;

/**
 * Test billable detail helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Helper\Billing
 */
class TestBillableDetailHelper extends BillableDetailHelper {

    /**
     * {@inheritDoc}
     */
    public static function getQuantity(BillableDetailInterface $billableDetail): float {
        return parent::getQuantity($billableDetail);
    }
}
