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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectation5Trait;

/**
 * Lib affectation5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectation5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectation5() method.
     *
     * @return void
     */
    public function testSetLibAffectation5() {

        $obj = new TestStringLibAffectation5Trait();

        $obj->setLibAffectation5("libAffectation5");
        $this->assertEquals("libAffectation5", $obj->getLibAffectation5());
    }
}
