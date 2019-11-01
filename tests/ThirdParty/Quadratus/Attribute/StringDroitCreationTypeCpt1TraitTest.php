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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDroitCreationTypeCpt1Trait;

/**
 * Droit creation type cpt1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDroitCreationTypeCpt1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDroitCreationTypeCpt1() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt1() {

        $obj = new TestStringDroitCreationTypeCpt1Trait();

        $obj->setDroitCreationTypeCpt1("droitCreationTypeCpt1");
        $this->assertEquals("droitCreationTypeCpt1", $obj->getDroitCreationTypeCpt1());
    }
}
