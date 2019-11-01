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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCorres2Trait;

/**
 * Corres2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCorres2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCorres2() method.
     *
     * @return void
     */
    public function testSetCorres2() {

        $obj = new TestStringCorres2Trait();

        $obj->setCorres2("corres2");
        $this->assertEquals("corres2", $obj->getCorres2());
    }
}
