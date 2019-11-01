<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNceCongesSpectaclesTrait;

/**
 * N c e conges spectacles trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNceCongesSpectaclesTraitTest extends AbstractTestCase {

    /**
     * Tests the setNceCongesSpectacles() method.
     *
     * @return void
     */
    public function testSetNceCongesSpectacles() {

        $obj = new TestIntNceCongesSpectaclesTrait();

        $obj->setNceCongesSpectacles(10);
        $this->assertEquals(10, $obj->getNceCongesSpectacles());
    }
}
