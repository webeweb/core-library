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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtebacDestMessageTrait;

/**
 * E t e b a c dest message trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtebacDestMessageTraitTest extends AbstractTestCase {

    /**
     * Tests the setEtebacDestMessage() method.
     *
     * @return void
     */
    public function testSetEtebacDestMessage() {

        $obj = new TestStringEtebacDestMessageTrait();

        $obj->setEtebacDestMessage("etebacDestMessage");
        $this->assertEquals("etebacDestMessage", $obj->getEtebacDestMessage());
    }
}
