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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomDuPereNo2Trait;

/**
 * Nom du pere no2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomDuPereNo2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomDuPereNo2() method.
     *
     * @return void
     */
    public function testSetNomDuPereNo2() {

        $obj = new TestStringNomDuPereNo2Trait();

        $obj->setNomDuPereNo2("nomDuPereNo2");
        $this->assertEquals("nomDuPereNo2", $obj->getNomDuPereNo2());
    }
}
