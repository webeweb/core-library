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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodifClasse0SeuleTrait;

/**
 * Codif classe0 seule trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodifClasse0SeuleTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodifClasse0Seule() method.
     *
     * @return void
     */
    public function testSetCodifClasse0Seule() {

        $obj = new TestStringCodifClasse0SeuleTrait();

        $obj->setCodifClasse0Seule("codifClasse0Seule");
        $this->assertEquals("codifClasse0Seule", $obj->getCodifClasse0Seule());
    }
}
