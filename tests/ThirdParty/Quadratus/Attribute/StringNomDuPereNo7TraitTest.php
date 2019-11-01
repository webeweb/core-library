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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomDuPereNo7Trait;

/**
 * Nom du pere no7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomDuPereNo7TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomDuPereNo7() method.
     *
     * @return void
     */
    public function testSetNomDuPereNo7() {

        $obj = new TestStringNomDuPereNo7Trait();

        $obj->setNomDuPereNo7("nomDuPereNo7");
        $this->assertEquals("nomDuPereNo7", $obj->getNomDuPereNo7());
    }
}
