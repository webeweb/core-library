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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeDomiciliationBanque2Trait;

/**
 * Type domiciliation banque2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeDomiciliationBanque2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeDomiciliationBanque2() method.
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque2() {

        $obj = new TestStringTypeDomiciliationBanque2Trait();

        $obj->setTypeDomiciliationBanque2("typeDomiciliationBanque2");
        $this->assertEquals("typeDomiciliationBanque2", $obj->getTypeDomiciliationBanque2());
    }
}
