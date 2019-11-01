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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDroitCreationTypeCpt5Trait;

/**
 * Droit creation type cpt5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDroitCreationTypeCpt5TraitTest extends AbstractTestCase {

    /**
     * Tests the setDroitCreationTypeCpt5() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt5() {

        $obj = new TestStringDroitCreationTypeCpt5Trait();

        $obj->setDroitCreationTypeCpt5("droitCreationTypeCpt5");
        $this->assertEquals("droitCreationTypeCpt5", $obj->getDroitCreationTypeCpt5());
    }
}
