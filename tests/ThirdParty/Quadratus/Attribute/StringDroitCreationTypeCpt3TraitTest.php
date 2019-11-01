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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDroitCreationTypeCpt3Trait;

/**
 * Droit creation type cpt3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDroitCreationTypeCpt3TraitTest extends AbstractTestCase {

    /**
     * Tests the setDroitCreationTypeCpt3() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt3() {

        $obj = new TestStringDroitCreationTypeCpt3Trait();

        $obj->setDroitCreationTypeCpt3("droitCreationTypeCpt3");
        $this->assertEquals("droitCreationTypeCpt3", $obj->getDroitCreationTypeCpt3());
    }
}
