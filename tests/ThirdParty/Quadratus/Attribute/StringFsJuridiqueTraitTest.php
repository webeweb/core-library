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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFsJuridiqueTrait;

/**
 * F s_ juridique trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFsJuridiqueTraitTest extends AbstractTestCase {

    /**
     * Tests the setFsJuridique() method.
     *
     * @return void
     */
    public function testSetFsJuridique() {

        $obj = new TestStringFsJuridiqueTrait();

        $obj->setFsJuridique("fsJuridique");
        $this->assertEquals("fsJuridique", $obj->getFsJuridique());
    }
}
