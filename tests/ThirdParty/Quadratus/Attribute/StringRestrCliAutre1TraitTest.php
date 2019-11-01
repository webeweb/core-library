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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRestrCliAutre1Trait;

/**
 * Restr cli autre1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRestrCliAutre1TraitTest extends AbstractTestCase {

    /**
     * Tests the setRestrCliAutre1() method.
     *
     * @return void
     */
    public function testSetRestrCliAutre1() {

        $obj = new TestStringRestrCliAutre1Trait();

        $obj->setRestrCliAutre1("restrCliAutre1");
        $this->assertEquals("restrCliAutre1", $obj->getRestrCliAutre1());
    }
}
