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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtBureau3Trait;

/**
 * At bureau3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtBureau3TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtBureau3() method.
     *
     * @return void
     */
    public function testSetAtBureau3() {

        $obj = new TestStringAtBureau3Trait();

        $obj->setAtBureau3("atBureau3");
        $this->assertEquals("atBureau3", $obj->getAtBureau3());
    }
}
