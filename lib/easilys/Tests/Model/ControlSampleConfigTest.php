<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\ControlSampleConfig;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Control sample config test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class ControlSampleConfigTest extends AbstractTestCase {

    /**
     * Test setAmountForConsumptionSite()
     *
     * @return void
     */
    public function testSetAmountForConsumptionSite(): void {

        $obj = new ControlSampleConfig();

        $obj->setAmountForConsumptionSite("amountForConsumptionSite");
        $this->assertEquals("amountForConsumptionSite", $obj->getAmountForConsumptionSite());
    }

    /**
     * Test setAmountForProductionSite()
     *
     * @return void
     */
    public function testSetAmountForProductionSite(): void {

        $obj = new ControlSampleConfig();

        $obj->setAmountForProductionSite("amountForProductionSite");
        $this->assertEquals("amountForProductionSite", $obj->getAmountForProductionSite());
    }

    /**
     * Test setIsControlSampleActive()
     *
     * @return void
     */
    public function testSetIsControlSampleActive(): void {

        $obj = new ControlSampleConfig();

        $obj->setIsControlSampleActive(true);
        $this->assertTrue($obj->getIsControlSampleActive());
    }

    /**
     * Test setIsControlSampleBillable()
     *
     * @return void
     */
    public function testSetIsControlSampleBillable(): void {

        $obj = new ControlSampleConfig();

        $obj->setIsControlSampleBillable(true);
        $this->assertTrue($obj->getIsControlSampleBillable());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ControlSampleConfig();

        $this->assertNull($obj->getAmountForConsumptionSite());
        $this->assertNull($obj->getAmountForProductionSite());
        $this->assertNull($obj->getIsControlSampleActive());
        $this->assertNull($obj->getIsControlSampleBillable());
    }
}
