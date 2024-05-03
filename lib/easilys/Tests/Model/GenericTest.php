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

use WBW\Library\Easilys\Model\Generic;
use WBW\Library\Easilys\Model\GenericFamily;
use WBW\Library\Easilys\Model\ProductionUnit;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Generic test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class GenericTest extends AbstractTestCase {

    /**
     * Test setGenericFamily()
     *
     * @return void
     */
    public function testSetGenericFamily(): void {

        // Set a Generic family mock.
        $genericFamily = new GenericFamily();

        $obj = new Generic();

        $obj->setGenericFamily($genericFamily);
        $this->assertSame($genericFamily, $obj->getGenericFamily());
    }

    /**
     * Test setProductionUnit()
     *
     * @return void
     */
    public function testSetProductionUnit(): void {

        // Set a Generic family mock.
        $productionUnit = new ProductionUnit();

        $obj = new Generic();

        $obj->setProductionUnit($productionUnit);
        $this->assertSame($productionUnit, $obj->getProductionUnit());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Generic();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabel());

        $this->assertNull($obj->getGenericFamily());
        $this->assertNull($obj->getProductionUnit());
    }
}
