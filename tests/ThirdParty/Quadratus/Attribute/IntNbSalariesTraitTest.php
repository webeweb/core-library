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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbSalariesTrait;

/**
 * Nb salaries trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbSalariesTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbSalaries() method.
     *
     * @return void
     */
    public function testSetNbSalaries() {

        $obj = new TestIntNbSalariesTrait();

        $obj->setNbSalaries(10);
        $this->assertEquals(10, $obj->getNbSalaries());
    }
}
