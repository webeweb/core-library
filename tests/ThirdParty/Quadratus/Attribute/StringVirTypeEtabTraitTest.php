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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringVirTypeEtabTrait;

/**
 * Vir type etab trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringVirTypeEtabTraitTest extends AbstractTestCase {

    /**
     * Tests the setVirTypeEtab() method.
     *
     * @return void
     */
    public function testSetVirTypeEtab() {

        $obj = new TestStringVirTypeEtabTrait();

        $obj->setVirTypeEtab("virTypeEtab");
        $this->assertEquals("virTypeEtab", $obj->getVirTypeEtab());
    }
}
