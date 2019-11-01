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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDroitCreationTypeCpt8Trait;

/**
 * Droit creation type cpt8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDroitCreationTypeCpt8TraitTest extends AbstractTestCase {

    /**
     * Tests the setDroitCreationTypeCpt8() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt8() {

        $obj = new TestStringDroitCreationTypeCpt8Trait();

        $obj->setDroitCreationTypeCpt8("droitCreationTypeCpt8");
        $this->assertEquals("droitCreationTypeCpt8", $obj->getDroitCreationTypeCpt8());
    }
}
