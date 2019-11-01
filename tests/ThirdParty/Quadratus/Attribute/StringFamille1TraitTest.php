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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFamille1Trait;

/**
 * Famille1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFamille1TraitTest extends AbstractTestCase {

    /**
     * Tests the setFamille1() method.
     *
     * @return void
     */
    public function testSetFamille1() {

        $obj = new TestStringFamille1Trait();

        $obj->setFamille1("famille1");
        $this->assertEquals("famille1", $obj->getFamille1());
    }
}
