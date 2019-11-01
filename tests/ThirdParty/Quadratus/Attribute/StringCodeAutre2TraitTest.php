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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeAutre2Trait;

/**
 * Code autre2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeAutre2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeAutre2() method.
     *
     * @return void
     */
    public function testSetCodeAutre2() {

        $obj = new TestStringCodeAutre2Trait();

        $obj->setCodeAutre2("codeAutre2");
        $this->assertEquals("codeAutre2", $obj->getCodeAutre2());
    }
}
