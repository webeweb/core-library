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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtEtab5Trait;

/**
 * At etab5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtEtab5TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtEtab5() method.
     *
     * @return void
     */
    public function testSetAtEtab5() {

        $obj = new TestStringAtEtab5Trait();

        $obj->setAtEtab5("atEtab5");
        $this->assertEquals("atEtab5", $obj->getAtEtab5());
    }
}
