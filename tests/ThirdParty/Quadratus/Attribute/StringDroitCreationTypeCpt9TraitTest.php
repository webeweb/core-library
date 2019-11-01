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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDroitCreationTypeCpt9Trait;

/**
 * Droit creation type cpt9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDroitCreationTypeCpt9TraitTest extends AbstractTestCase {

    /**
     * Tests the setDroitCreationTypeCpt9() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt9() {

        $obj = new TestStringDroitCreationTypeCpt9Trait();

        $obj->setDroitCreationTypeCpt9("droitCreationTypeCpt9");
        $this->assertEquals("droitCreationTypeCpt9", $obj->getDroitCreationTypeCpt9());
    }
}
