<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Factory\Vehicle;

use WBW\Library\Common\Factory\Vehicle\VehicleBrandFactory;
use WBW\Library\Common\Model\Vehicle\VehicleBrand;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Vehicle brand factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Factory\Vehicle
 */
class VehicleBrandFactoryTest extends AbstractTestCase {

    /**
     * Test copy()
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
