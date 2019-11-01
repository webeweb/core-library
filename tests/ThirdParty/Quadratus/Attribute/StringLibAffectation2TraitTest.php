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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectation2Trait;

/**
 * Lib affectation2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectation2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectation2() method.
     *
     * @return void
     */
    public function testSetLibAffectation2() {

        $obj = new TestStringLibAffectation2Trait();

        $obj->setLibAffectation2("libAffectation2");
        $this->assertEquals("libAffectation2", $obj->getLibAffectation2());
    }
}
