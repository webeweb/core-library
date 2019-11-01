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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibAffectation4Trait;

/**
 * Lib affectation4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibAffectation4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibAffectation4() method.
     *
     * @return void
     */
    public function testSetLibAffectation4() {

        $obj = new TestStringLibAffectation4Trait();

        $obj->setLibAffectation4("libAffectation4");
        $this->assertEquals("libAffectation4", $obj->getLibAffectation4());
    }
}
