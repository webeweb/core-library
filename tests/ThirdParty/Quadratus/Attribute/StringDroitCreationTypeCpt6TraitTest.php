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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDroitCreationTypeCpt6Trait;

/**
 * Droit creation type cpt6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDroitCreationTypeCpt6TraitTest extends AbstractTestCase {

    /**
     * Tests the setDroitCreationTypeCpt6() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt6() {

        $obj = new TestStringDroitCreationTypeCpt6Trait();

        $obj->setDroitCreationTypeCpt6("droitCreationTypeCpt6");
        $this->assertEquals("droitCreationTypeCpt6", $obj->getDroitCreationTypeCpt6());
    }
}
