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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectation7Trait;

/**
 * Lib affectation7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectation7TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectation7() method.
     *
     * @return void
     */
    public function testSetLibAffectation7() {

        $obj = new TestStringLibAffectation7Trait();

        $obj->setLibAffectation7("libAffectation7");
        $this->assertEquals("libAffectation7", $obj->getLibAffectation7());
    }
}
