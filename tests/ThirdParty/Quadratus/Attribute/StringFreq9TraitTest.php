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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFreq9Trait;

/**
 * Freq9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFreq9TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq9() method.
     *
     * @return void
     */
    public function testSetFreq9() {

        $obj = new TestStringFreq9Trait();

        $obj->setFreq9("freq9");
        $this->assertEquals("freq9", $obj->getFreq9());
    }
}
