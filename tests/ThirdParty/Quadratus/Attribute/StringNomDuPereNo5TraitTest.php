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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomDuPereNo5Trait;

/**
 * Nom du pere no5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomDuPereNo5TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomDuPereNo5() method.
     *
     * @return void
     */
    public function testSetNomDuPereNo5() {

        $obj = new TestStringNomDuPereNo5Trait();

        $obj->setNomDuPereNo5("nomDuPereNo5");
        $this->assertEquals("nomDuPereNo5", $obj->getNomDuPereNo5());
    }
}
