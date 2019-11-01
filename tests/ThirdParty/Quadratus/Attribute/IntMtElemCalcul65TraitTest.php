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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMtElemCalcul65Trait;

/**
 * Mt elem calcul65 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMtElemCalcul65TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtElemCalcul65() method.
     *
     * @return void
     */
    public function testSetMtElemCalcul65() {

        $obj = new TestIntMtElemCalcul65Trait();

        $obj->setMtElemCalcul65(10);
        $this->assertEquals(10, $obj->getMtElemCalcul65());
    }
}
