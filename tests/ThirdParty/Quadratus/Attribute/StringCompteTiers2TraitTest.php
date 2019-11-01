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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteTiers2Trait;

/**
 * Compte tiers2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteTiers2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteTiers2() method.
     *
     * @return void
     */
    public function testSetCompteTiers2() {

        $obj = new TestStringCompteTiers2Trait();

        $obj->setCompteTiers2("compteTiers2");
        $this->assertEquals("compteTiers2", $obj->getCompteTiers2());
    }
}
