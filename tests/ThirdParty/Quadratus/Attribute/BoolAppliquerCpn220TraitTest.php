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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolAppliquerCpn220Trait;

/**
 * Appliquer c p n220 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolAppliquerCpn220TraitTest extends AbstractTestCase {

    /**
     * Tests the setAppliquerCpn220() method.
     *
     * @return void
     */
    public function testSetAppliquerCpn220() {

        $obj = new TestBoolAppliquerCpn220Trait();

        $obj->setAppliquerCpn220(true);
        $this->assertEquals(true, $obj->getAppliquerCpn220());
    }
}
