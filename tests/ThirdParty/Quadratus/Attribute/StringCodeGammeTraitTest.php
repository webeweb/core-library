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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeGammeTrait;

/**
 * Code gamme trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeGammeTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeGamme() method.
     *
     * @return void
     */
    public function testSetCodeGamme() {

        $obj = new TestStringCodeGammeTrait();

        $obj->setCodeGamme("codeGamme");
        $this->assertEquals("codeGamme", $obj->getCodeGamme());
    }
}
