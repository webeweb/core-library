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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteChargePartVersTrait;

/**
 * Compte charge part vers trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteChargePartVersTraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteChargePartVers() method.
     *
     * @return void
     */
    public function testSetCompteChargePartVers() {

        $obj = new TestStringCompteChargePartVersTrait();

        $obj->setCompteChargePartVers("compteChargePartVers");
        $this->assertEquals("compteChargePartVers", $obj->getCompteChargePartVers());
    }
}
