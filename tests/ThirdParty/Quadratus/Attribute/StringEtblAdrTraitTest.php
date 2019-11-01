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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtblAdrTrait;

/**
 * Etbl adr trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtblAdrTraitTest extends AbstractTestCase {

    /**
     * Tests the setEtblAdr() method.
     *
     * @return void
     */
    public function testSetEtblAdr() {

        $obj = new TestStringEtblAdrTrait();

        $obj->setEtblAdr("etblAdr");
        $this->assertEquals("etblAdr", $obj->getEtblAdr());
    }
}
