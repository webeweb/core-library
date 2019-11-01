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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectationFrn5Trait;

/**
 * Lib affectation frn5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectationFrn5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectationFrn5() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn5() {

        $obj = new TestStringLibAffectationFrn5Trait();

        $obj->setLibAffectationFrn5("libAffectationFrn5");
        $this->assertEquals("libAffectationFrn5", $obj->getLibAffectationFrn5());
    }
}
