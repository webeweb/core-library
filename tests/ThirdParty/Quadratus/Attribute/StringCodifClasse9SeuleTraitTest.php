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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodifClasse9SeuleTrait;

/**
 * Codif classe9 seule trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodifClasse9SeuleTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodifClasse9Seule() method.
     *
     * @return void
     */
    public function testSetCodifClasse9Seule() {

        $obj = new TestStringCodifClasse9SeuleTrait();

        $obj->setCodifClasse9Seule("codifClasse9Seule");
        $this->assertEquals("codifClasse9Seule", $obj->getCodifClasse9Seule());
    }
}
