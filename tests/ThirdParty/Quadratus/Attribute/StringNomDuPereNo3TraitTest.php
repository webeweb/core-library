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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomDuPereNo3Trait;

/**
 * Nom du pere no3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomDuPereNo3TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomDuPereNo3() method.
     *
     * @return void
     */
    public function testSetNomDuPereNo3() {

        $obj = new TestStringNomDuPereNo3Trait();

        $obj->setNomDuPereNo3("nomDuPereNo3");
        $this->assertEquals("nomDuPereNo3", $obj->getNomDuPereNo3());
    }
}
