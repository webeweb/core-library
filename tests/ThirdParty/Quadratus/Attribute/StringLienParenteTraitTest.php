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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLienParenteTrait;

/**
 * Lien parente trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLienParenteTraitTest extends AbstractTestCase {

    /**
     * Tests the setLienParente() method.
     *
     * @return void
     */
    public function testSetLienParente() {

        $obj = new TestStringLienParenteTrait();

        $obj->setLienParente("lienParente");
        $this->assertEquals("lienParente", $obj->getLienParente());
    }
}
