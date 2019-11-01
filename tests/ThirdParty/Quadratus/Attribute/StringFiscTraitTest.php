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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFiscTrait;

/**
 * F i s c trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFiscTraitTest extends AbstractTestCase {

    /**
     * Tests the setFisc() method.
     *
     * @return void
     */
    public function testSetFisc() {

        $obj = new TestStringFiscTrait();

        $obj->setFisc("fisc");
        $this->assertEquals("fisc", $obj->getFisc());
    }
}
