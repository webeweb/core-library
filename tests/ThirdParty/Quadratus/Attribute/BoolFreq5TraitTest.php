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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFreq5Trait;

/**
 * Freq5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFreq5TraitTest extends AbstractTestCase {

    /**
     * Tests the setFreq5() method.
     *
     * @return void
     */
    public function testSetFreq5() {

        $obj = new TestBoolFreq5Trait();

        $obj->setFreq5(true);
        $this->assertEquals(true, $obj->getFreq5());
    }
}
