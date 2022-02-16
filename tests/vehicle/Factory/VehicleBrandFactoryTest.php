<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Vehicle\Tests\Factory;

use WBW\Library\Vehicle\Factory\VehicleBrandFactory;
use WBW\Library\Vehicle\Model\VehicleBrand;
use WBW\Library\Vehicle\Tests\AbstractTestCase;

/**
 * Vehicle brand factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Vehicle\Tests\Factory
 */
class VehicleBrandFactoryTest extends AbstractTestCase {

    /**
     * Tests copy()
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new VehicleBrand();
        $obj->setLabel("label");

        $res = VehicleBrandFactory::copy($obj, new VehicleBrand());
        $this->assertEquals($obj->getLabel(), $res->getLabel());
    }
}
