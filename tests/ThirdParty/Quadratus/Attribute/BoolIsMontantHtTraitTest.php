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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolIsMontantHtTrait;

/**
 * Is montant h t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolIsMontantHtTraitTest extends AbstractTestCase {

    /**
     * Tests the setIsMontantHt() method.
     *
     * @return void
     */
    public function testSetIsMontantHt() {

        $obj = new TestBoolIsMontantHtTrait();

        $obj->setIsMontantHt(true);
        $this->assertEquals(true, $obj->getIsMontantHt());
    }
}
