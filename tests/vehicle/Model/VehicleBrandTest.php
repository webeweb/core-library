<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Vehicle\Tests\Model;

use WBW\Library\Vehicle\Model\VehicleBrand;
use WBW\Library\Vehicle\Model\VehicleBrandInterface;
use WBW\Library\Vehicle\Tests\AbstractTestCase;

/**
 * Vehicle brand test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Tests\Model
 */
class VehicleBrandTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VehicleBrand();

        $this->assertInstanceOf(VehicleBrandInterface::class, $obj);

        $this->assertNull($obj->getLabel());
    }
}