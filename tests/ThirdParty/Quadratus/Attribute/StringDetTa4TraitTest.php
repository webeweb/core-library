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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDetTa4Trait;

/**
 * Det t a4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDetTa4TraitTest extends AbstractTestCase {

    /**
     * Tests the setDetTa4() method.
     *
     * @return void
     */
    public function testSetDetTa4() {

        $obj = new TestStringDetTa4Trait();

        $obj->setDetTa4("detTa4");
        $this->assertEquals("detTa4", $obj->getDetTa4());
    }
}
