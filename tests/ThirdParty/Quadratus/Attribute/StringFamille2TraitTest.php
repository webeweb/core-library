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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFamille2Trait;

/**
 * Famille2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFamille2TraitTest extends AbstractTestCase {

    /**
     * Tests the setFamille2() method.
     *
     * @return void
     */
    public function testSetFamille2() {

        $obj = new TestStringFamille2Trait();

        $obj->setFamille2("famille2");
        $this->assertEquals("famille2", $obj->getFamille2());
    }
}
