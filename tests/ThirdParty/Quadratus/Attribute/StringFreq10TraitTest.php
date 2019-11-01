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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFreq10Trait;

/**
 * Freq10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFreq10TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq10() method.
     *
     * @return void
     */
    public function testSetFreq10() {

        $obj = new TestStringFreq10Trait();

        $obj->setFreq10("freq10");
        $this->assertEquals("freq10", $obj->getFreq10());
    }
}
