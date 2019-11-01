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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringClientOuFrnTrait;

/**
 * Client ou frn trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringClientOuFrnTraitTest extends AbstractTestCase {

    /**
     * Tests the setClientOuFrn() method.
     *
     * @return void
     */
    public function testSetClientOuFrn() {

        $obj = new TestStringClientOuFrnTrait();

        $obj->setClientOuFrn("clientOuFrn");
        $this->assertEquals("clientOuFrn", $obj->getClientOuFrn());
    }
}
