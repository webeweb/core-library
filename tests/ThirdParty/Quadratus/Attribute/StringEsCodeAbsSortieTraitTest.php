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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEsCodeAbsSortieTrait;

/**
 * E s code abs sortie trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEsCodeAbsSortieTraitTest extends AbstractTestCase {

    /**
     * Tests the setEsCodeAbsSortie() method.
     *
     * @return void
     */
    public function testSetEsCodeAbsSortie() {

        $obj = new TestStringEsCodeAbsSortieTrait();

        $obj->setEsCodeAbsSortie("esCodeAbsSortie");
        $this->assertEquals("esCodeAbsSortie", $obj->getEsCodeAbsSortie());
    }
}
