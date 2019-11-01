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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtEtab1Trait;

/**
 * At etab1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtEtab1TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtEtab1() method.
     *
     * @return void
     */
    public function testSetAtEtab1() {

        $obj = new TestStringAtEtab1Trait();

        $obj->setAtEtab1("atEtab1");
        $this->assertEquals("atEtab1", $obj->getAtEtab1());
    }
}
