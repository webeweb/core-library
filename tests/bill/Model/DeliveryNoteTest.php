<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Model;

use WBW\Library\Bill\Model\BillableInterface;
use WBW\Library\Bill\Model\DeliveryNote;
use WBW\Library\Bill\Model\DeliveryNoteInterface;
use WBW\Library\Bill\Tests\AbstractTestCase;

/**
 * Delivery note test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class DeliveryNoteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DeliveryNote();

        $this->assertInstanceOf(BillableInterface::class, $obj);
        $this->assertInstanceOf(DeliveryNoteInterface::class, $obj);
    }
}