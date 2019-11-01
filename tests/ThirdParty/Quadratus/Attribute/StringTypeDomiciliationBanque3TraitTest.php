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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeDomiciliationBanque3Trait;

/**
 * Type domiciliation banque3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeDomiciliationBanque3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeDomiciliationBanque3() method.
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque3() {

        $obj = new TestStringTypeDomiciliationBanque3Trait();

        $obj->setTypeDomiciliationBanque3("typeDomiciliationBanque3");
        $this->assertEquals("typeDomiciliationBanque3", $obj->getTypeDomiciliationBanque3());
    }
}
