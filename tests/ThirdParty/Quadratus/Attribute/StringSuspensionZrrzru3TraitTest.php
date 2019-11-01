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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuspensionZrrzru3Trait;

/**
 * Suspension z r r z r u3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuspensionZrrzru3TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuspensionZrrzru3() method.
     *
     * @return void
     */
    public function testSetSuspensionZrrzru3() {

        $obj = new TestStringSuspensionZrrzru3Trait();

        $obj->setSuspensionZrrzru3("suspensionZrrzru3");
        $this->assertEquals("suspensionZrrzru3", $obj->getSuspensionZrrzru3());
    }
}
