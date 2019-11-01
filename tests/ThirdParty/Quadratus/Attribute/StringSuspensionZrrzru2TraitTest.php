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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuspensionZrrzru2Trait;

/**
 * Suspension z r r z r u2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuspensionZrrzru2TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuspensionZrrzru2() method.
     *
     * @return void
     */
    public function testSetSuspensionZrrzru2() {

        $obj = new TestStringSuspensionZrrzru2Trait();

        $obj->setSuspensionZrrzru2("suspensionZrrzru2");
        $this->assertEquals("suspensionZrrzru2", $obj->getSuspensionZrrzru2());
    }
}
