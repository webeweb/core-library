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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectation1Trait;

/**
 * Lib affectation1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectation1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectation1() method.
     *
     * @return void
     */
    public function testSetLibAffectation1() {

        $obj = new TestStringLibAffectation1Trait();

        $obj->setLibAffectation1("libAffectation1");
        $this->assertEquals("libAffectation1", $obj->getLibAffectation1());
    }
}
