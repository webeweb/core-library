<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\DeliveryWeekday;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Delivery weekday test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class DeliveryWeekdayTest extends AbstractTestCase {

    /**
     * Test setWeekday()
     *
     * @return void
     */
    public function testSetWeekday(): void {

        $obj = new DeliveryWeekday();

        $obj->setWeekday("weekday");
        $this->assertEquals("weekday", $obj->getWeekday());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DeliveryWeekday();

        $this->assertNull($obj->getWeekday());
    }
}
