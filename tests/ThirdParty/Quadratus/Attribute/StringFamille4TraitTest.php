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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFamille4Trait;

/**
 * Famille4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFamille4TraitTest extends AbstractTestCase {

    /**
     * Tests the setFamille4() method.
     *
     * @return void
     */
    public function testSetFamille4() {

        $obj = new TestStringFamille4Trait();

        $obj->setFamille4("famille4");
        $this->assertEquals("famille4", $obj->getFamille4());
    }
}
