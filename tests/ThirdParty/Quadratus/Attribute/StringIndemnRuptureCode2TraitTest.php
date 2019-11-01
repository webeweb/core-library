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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIndemnRuptureCode2Trait;

/**
 * Indemn rupture_ code2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIndemnRuptureCode2TraitTest extends AbstractTestCase {

    /**
     * Tests the setIndemnRuptureCode2() method.
     *
     * @return void
     */
    public function testSetIndemnRuptureCode2() {

        $obj = new TestStringIndemnRuptureCode2Trait();

        $obj->setIndemnRuptureCode2("indemnRuptureCode2");
        $this->assertEquals("indemnRuptureCode2", $obj->getIndemnRuptureCode2());
    }
}
