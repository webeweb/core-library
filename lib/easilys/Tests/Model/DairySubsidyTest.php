<?php

declare(strict_types=1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\DairySubsidy;
use WBW\Library\Easilys\Model\Unit;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Dairy subsidy test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class DairySubsidyTest extends AbstractTestCase {

    /**
     * Test setAmount()
     *
     * @return void
     */
    public function testSetAmount(): void {

        $obj = new DairySubsidy();

        $obj->setAmount(0.1);
        $this->assertEquals(0.1, $obj->getAmount());
    }

    /**
     * Test setUnit()
     *
     * @return void
     */
    public function testSetUnit(): void {

        // Set a Unit mock.
        $unit = new Unit();

        $obj = new DairySubsidy();

        $obj->setUnit($unit);
        $this->assertSame($unit, $obj->getUnit());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DairySubsidy();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLabel());

        $this->assertNull($obj->getAmount());
        $this->assertNull($obj->getUnit());
    }
}
