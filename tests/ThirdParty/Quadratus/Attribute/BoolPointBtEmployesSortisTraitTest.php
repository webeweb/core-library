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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPointBtEmployesSortisTrait;

/**
 * Point b t_ employes sortis trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPointBtEmployesSortisTraitTest extends AbstractTestCase {

    /**
     * Tests the setPointBtEmployesSortis() method.
     *
     * @return void
     */
    public function testSetPointBtEmployesSortis() {

        $obj = new TestBoolPointBtEmployesSortisTrait();

        $obj->setPointBtEmployesSortis(true);
        $this->assertEquals(true, $obj->getPointBtEmployesSortis());
    }
}
