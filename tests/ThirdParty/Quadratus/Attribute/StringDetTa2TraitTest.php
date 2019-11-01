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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDetTa2Trait;

/**
 * Det t a2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDetTa2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDetTa2() method.
     *
     * @return void
     */
    public function testSetDetTa2() {

        $obj = new TestStringDetTa2Trait();

        $obj->setDetTa2("detTa2");
        $this->assertEquals("detTa2", $obj->getDetTa2());
    }
}
