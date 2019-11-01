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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodifClasse0Trait;

/**
 * Codif classe0 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodifClasse0TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodifClasse0() method.
     *
     * @return void
     */
    public function testSetCodifClasse0() {

        $obj = new TestStringCodifClasse0Trait();

        $obj->setCodifClasse0("codifClasse0");
        $this->assertEquals("codifClasse0", $obj->getCodifClasse0());
    }
}
