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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuspensionZrrzru1Trait;

/**
 * Suspension z r r z r u1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuspensionZrrzru1TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuspensionZrrzru1() method.
     *
     * @return void
     */
    public function testSetSuspensionZrrzru1() {

        $obj = new TestStringSuspensionZrrzru1Trait();

        $obj->setSuspensionZrrzru1("suspensionZrrzru1");
        $this->assertEquals("suspensionZrrzru1", $obj->getSuspensionZrrzru1());
    }
}
