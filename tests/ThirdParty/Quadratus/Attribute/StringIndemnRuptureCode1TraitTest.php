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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIndemnRuptureCode1Trait;

/**
 * Indemn rupture_ code1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIndemnRuptureCode1TraitTest extends AbstractTestCase {

    /**
     * Tests the setIndemnRuptureCode1() method.
     *
     * @return void
     */
    public function testSetIndemnRuptureCode1() {

        $obj = new TestStringIndemnRuptureCode1Trait();

        $obj->setIndemnRuptureCode1("indemnRuptureCode1");
        $this->assertEquals("indemnRuptureCode1", $obj->getIndemnRuptureCode1());
    }
}
