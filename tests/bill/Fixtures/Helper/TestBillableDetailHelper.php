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

use WBW\Library\Bill\Helper\BillableDetailHelper;
use WBW\Library\Bill\Model\BillableDetailInterface;

/**
 * Test billable detail helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Fixtures\Helper
 */
class TestBillableDetailHelper extends BillableDetailHelper {

    /**
     * {@inheritDoc}
     */
    public static function getQuantity(BillableDetailInterface $billableDetail): float {
        return parent::getQuantity($billableDetail);
    }
}