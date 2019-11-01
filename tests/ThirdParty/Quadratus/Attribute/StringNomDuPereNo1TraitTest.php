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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomDuPereNo1Trait;

/**
 * Nom du pere no1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomDuPereNo1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomDuPereNo1() method.
     *
     * @return void
     */
    public function testSetNomDuPereNo1() {

        $obj = new TestStringNomDuPereNo1Trait();

        $obj->setNomDuPereNo1("nomDuPereNo1");
        $this->assertEquals("nomDuPereNo1", $obj->getNomDuPereNo1());
    }
}
