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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibVariable1Trait;

/**
 * Lib variable1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibVariable1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibVariable1() method.
     *
     * @return void
     */
    public function testSetLibVariable1() {

        $obj = new TestStringLibVariable1Trait();

        $obj->setLibVariable1("libVariable1");
        $this->assertEquals("libVariable1", $obj->getLibVariable1());
    }
}
