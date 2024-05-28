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

namespace WBW\Library\Common\Tests\Model\Vehicle;

use JsonSerializable;
use WBW\Library\Common\Model\Vehicle\VehicleBrand;
use WBW\Library\Common\Model\Vehicle\VehicleBrandInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Vehicle brand test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Vehicle
 */
class VehicleBrandTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new VehicleBrand();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VehicleBrand();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(VehicleBrandInterface::class, $obj);

        $this->assertNull($obj->getLabel());
    }
}
