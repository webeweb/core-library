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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtEtab3Trait;

/**
 * At etab3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtEtab3TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtEtab3() method.
     *
     * @return void
     */
    public function testSetAtEtab3() {

        $obj = new TestStringAtEtab3Trait();

        $obj->setAtEtab3("atEtab3");
        $this->assertEquals("atEtab3", $obj->getAtEtab3());
    }
}
