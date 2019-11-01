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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeEntreeTrait;

/**
 * Code entree trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeEntreeTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeEntree() method.
     *
     * @return void
     */
    public function testSetCodeEntree() {

        $obj = new TestStringCodeEntreeTrait();

        $obj->setCodeEntree("codeEntree");
        $this->assertEquals("codeEntree", $obj->getCodeEntree());
    }
}
