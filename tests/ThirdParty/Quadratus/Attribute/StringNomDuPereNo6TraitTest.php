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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomDuPereNo6Trait;

/**
 * Nom du pere no6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomDuPereNo6TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomDuPereNo6() method.
     *
     * @return void
     */
    public function testSetNomDuPereNo6() {

        $obj = new TestStringNomDuPereNo6Trait();

        $obj->setNomDuPereNo6("nomDuPereNo6");
        $this->assertEquals("nomDuPereNo6", $obj->getNomDuPereNo6());
    }
}
