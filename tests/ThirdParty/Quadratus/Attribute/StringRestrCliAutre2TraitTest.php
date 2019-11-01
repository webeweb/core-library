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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRestrCliAutre2Trait;

/**
 * Restr cli autre2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRestrCliAutre2TraitTest extends AbstractTestCase {

    /**
     * Tests the setRestrCliAutre2() method.
     *
     * @return void
     */
    public function testSetRestrCliAutre2() {

        $obj = new TestStringRestrCliAutre2Trait();

        $obj->setRestrCliAutre2("restrCliAutre2");
        $this->assertEquals("restrCliAutre2", $obj->getRestrCliAutre2());
    }
}
