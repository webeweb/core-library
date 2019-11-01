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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeAutre1Trait;

/**
 * Code autre1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeAutre1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeAutre1() method.
     *
     * @return void
     */
    public function testSetCodeAutre1() {

        $obj = new TestStringCodeAutre1Trait();

        $obj->setCodeAutre1("codeAutre1");
        $this->assertEquals("codeAutre1", $obj->getCodeAutre1());
    }
}
