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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDroitCreationTypeCpt2Trait;

/**
 * Droit creation type cpt2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDroitCreationTypeCpt2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDroitCreationTypeCpt2() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt2() {

        $obj = new TestStringDroitCreationTypeCpt2Trait();

        $obj->setDroitCreationTypeCpt2("droitCreationTypeCpt2");
        $this->assertEquals("droitCreationTypeCpt2", $obj->getDroitCreationTypeCpt2());
    }
}
