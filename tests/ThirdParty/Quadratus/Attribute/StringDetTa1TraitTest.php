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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDetTa1Trait;

/**
 * Det t a1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDetTa1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDetTa1() method.
     *
     * @return void
     */
    public function testSetDetTa1() {

        $obj = new TestStringDetTa1Trait();

        $obj->setDetTa1("detTa1");
        $this->assertEquals("detTa1", $obj->getDetTa1());
    }
}
