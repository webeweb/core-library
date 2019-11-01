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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDroitCreationTypeCpt10Trait;

/**
 * Droit creation type cpt10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDroitCreationTypeCpt10TraitTest extends AbstractTestCase {

    /**
     * Tests the setDroitCreationTypeCpt10() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt10() {

        $obj = new TestStringDroitCreationTypeCpt10Trait();

        $obj->setDroitCreationTypeCpt10("droitCreationTypeCpt10");
        $this->assertEquals("droitCreationTypeCpt10", $obj->getDroitCreationTypeCpt10());
    }
}
