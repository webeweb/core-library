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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMandatDureeDadsTrait;

/**
 * Mandat duree d a d s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMandatDureeDadsTraitTest extends AbstractTestCase {

    /**
     * Tests the setMandatDureeDads() method.
     *
     * @return void
     */
    public function testSetMandatDureeDads() {

        $obj = new TestIntMandatDureeDadsTrait();

        $obj->setMandatDureeDads(10);
        $this->assertEquals(10, $obj->getMandatDureeDads());
    }
}
