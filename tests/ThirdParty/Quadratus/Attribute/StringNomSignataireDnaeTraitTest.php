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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomSignataireDnaeTrait;

/**
 * Nom signataire d n a e trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomSignataireDnaeTraitTest extends AbstractTestCase {

    /**
     * Tests the setNomSignataireDnae() method.
     *
     * @return void
     */
    public function testSetNomSignataireDnae() {

        $obj = new TestStringNomSignataireDnaeTrait();

        $obj->setNomSignataireDnae("nomSignataireDnae");
        $this->assertEquals("nomSignataireDnae", $obj->getNomSignataireDnae());
    }
}
