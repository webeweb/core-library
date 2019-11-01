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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFreq8Trait;

/**
 * Freq8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFreq8TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq8() method.
     *
     * @return void
     */
    public function testSetFreq8() {

        $obj = new TestStringFreq8Trait();

        $obj->setFreq8("freq8");
        $this->assertEquals("freq8", $obj->getFreq8());
    }
}
