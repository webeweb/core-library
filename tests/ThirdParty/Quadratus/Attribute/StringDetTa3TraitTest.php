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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDetTa3Trait;

/**
 * Det t a3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDetTa3TraitTest extends AbstractTestCase {

    /**
     * Tests the setDetTa3() method.
     *
     * @return void
     */
    public function testSetDetTa3() {

        $obj = new TestStringDetTa3Trait();

        $obj->setDetTa3("detTa3");
        $this->assertEquals("detTa3", $obj->getDetTa3());
    }
}
