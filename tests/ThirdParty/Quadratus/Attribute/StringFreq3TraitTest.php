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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFreq3Trait;

/**
 * Freq3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFreq3TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq3() method.
     *
     * @return void
     */
    public function testSetFreq3() {

        $obj = new TestStringFreq3Trait();

        $obj->setFreq3("freq3");
        $this->assertEquals("freq3", $obj->getFreq3());
    }
}
