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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtBureau1Trait;

/**
 * At bureau1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtBureau1TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtBureau1() method.
     *
     * @return void
     */
    public function testSetAtBureau1() {

        $obj = new TestStringAtBureau1Trait();

        $obj->setAtBureau1("atBureau1");
        $this->assertEquals("atBureau1", $obj->getAtBureau1());
    }
}
