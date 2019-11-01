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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFreq7Trait;

/**
 * Freq7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFreq7TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq7() method.
     *
     * @return void
     */
    public function testSetFreq7() {

        $obj = new TestStringFreq7Trait();

        $obj->setFreq7("freq7");
        $this->assertEquals("freq7", $obj->getFreq7());
    }
}
