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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFreq1Trait;

/**
 * Freq1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFreq1TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq1() method.
     *
     * @return void
     */
    public function testSetFreq1() {

        $obj = new TestStringFreq1Trait();

        $obj->setFreq1("freq1");
        $this->assertEquals("freq1", $obj->getFreq1());
    }
}
