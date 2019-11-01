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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDroitCreationTypeCpt7Trait;

/**
 * Droit creation type cpt7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDroitCreationTypeCpt7TraitTest extends AbstractTestCase {

    /**
     * Tests the setDroitCreationTypeCpt7() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt7() {

        $obj = new TestStringDroitCreationTypeCpt7Trait();

        $obj->setDroitCreationTypeCpt7("droitCreationTypeCpt7");
        $this->assertEquals("droitCreationTypeCpt7", $obj->getDroitCreationTypeCpt7());
    }
}
