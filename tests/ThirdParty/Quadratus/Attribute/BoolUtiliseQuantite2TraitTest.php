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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolUtiliseQuantite2Trait;

/**
 * Utilise quantite2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolUtiliseQuantite2TraitTest extends AbstractTestCase {

    /**
     * Tests the setUtiliseQuantite2() method.
     *
     * @return void
     */
    public function testSetUtiliseQuantite2() {

        $obj = new TestBoolUtiliseQuantite2Trait();

        $obj->setUtiliseQuantite2(true);
        $this->assertEquals(true, $obj->getUtiliseQuantite2());
    }
}
