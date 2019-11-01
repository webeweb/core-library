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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFreq3Trait;

/**
 * Freq3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFreq3TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq3() method.
     *
     * @return void
     */
    public function testSetFreq3() {

        $obj = new TestBoolFreq3Trait();

        $obj->setFreq3(true);
        $this->assertEquals(true, $obj->getFreq3());
    }
}
