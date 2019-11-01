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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtBureau2Trait;

/**
 * At bureau2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtBureau2TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtBureau2() method.
     *
     * @return void
     */
    public function testSetAtBureau2() {

        $obj = new TestStringAtBureau2Trait();

        $obj->setAtBureau2("atBureau2");
        $this->assertEquals("atBureau2", $obj->getAtBureau2());
    }
}
