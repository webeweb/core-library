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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteChargeIntVersTrait;

/**
 * Compte charge int vers trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteChargeIntVersTraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteChargeIntVers() method.
     *
     * @return void
     */
    public function testSetCompteChargeIntVers() {

        $obj = new TestStringCompteChargeIntVersTrait();

        $obj->setCompteChargeIntVers("compteChargeIntVers");
        $this->assertEquals("compteChargeIntVers", $obj->getCompteChargeIntVers());
    }
}
