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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFreq6Trait;

/**
 * Freq6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFreq6TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq6() method.
     *
     * @return void
     */
    public function testSetFreq6() {

        $obj = new TestStringFreq6Trait();

        $obj->setFreq6("freq6");
        $this->assertEquals("freq6", $obj->getFreq6());
    }
}
