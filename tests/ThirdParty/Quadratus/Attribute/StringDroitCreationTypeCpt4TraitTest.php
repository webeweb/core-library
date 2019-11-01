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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDroitCreationTypeCpt4Trait;

/**
 * Droit creation type cpt4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDroitCreationTypeCpt4TraitTest extends AbstractTestCase {

    /**
     * Tests the setDroitCreationTypeCpt4() method.
     *
     * @return void
     */
    public function testSetDroitCreationTypeCpt4() {

        $obj = new TestStringDroitCreationTypeCpt4Trait();

        $obj->setDroitCreationTypeCpt4("droitCreationTypeCpt4");
        $this->assertEquals("droitCreationTypeCpt4", $obj->getDroitCreationTypeCpt4());
    }
}
