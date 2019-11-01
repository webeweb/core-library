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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibVariable2Trait;

/**
 * Lib variable2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibVariable2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibVariable2() method.
     *
     * @return void
     */
    public function testSetLibVariable2() {

        $obj = new TestStringLibVariable2Trait();

        $obj->setLibVariable2("libVariable2");
        $this->assertEquals("libVariable2", $obj->getLibVariable2());
    }
}
