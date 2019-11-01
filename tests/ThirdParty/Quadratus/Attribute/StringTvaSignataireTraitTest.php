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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaSignataireTrait;

/**
 * T v a signataire trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaSignataireTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaSignataire() method.
     *
     * @return void
     */
    public function testSetTvaSignataire() {

        $obj = new TestStringTvaSignataireTrait();

        $obj->setTvaSignataire("tvaSignataire");
        $this->assertEquals("tvaSignataire", $obj->getTvaSignataire());
    }
}
