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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtblAAdresse1Trait;

/**
 * Etbl a adresse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtblAAdresse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtblAAdresse1() method.
     *
     * @return void
     */
    public function testSetEtblAAdresse1() {

        $obj = new TestStringEtblAAdresse1Trait();

        $obj->setEtblAAdresse1("etblAAdresse1");
        $this->assertEquals("etblAAdresse1", $obj->getEtblAAdresse1());
    }
}
