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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtEtab2Trait;

/**
 * At etab2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtEtab2TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtEtab2() method.
     *
     * @return void
     */
    public function testSetAtEtab2() {

        $obj = new TestStringAtEtab2Trait();

        $obj->setAtEtab2("atEtab2");
        $this->assertEquals("atEtab2", $obj->getAtEtab2());
    }
}
