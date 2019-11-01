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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtblAAdresse3Trait;

/**
 * Etbl a adresse3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtblAAdresse3TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtblAAdresse3() method.
     *
     * @return void
     */
    public function testSetEtblAAdresse3() {

        $obj = new TestStringEtblAAdresse3Trait();

        $obj->setEtblAAdresse3("etblAAdresse3");
        $this->assertEquals("etblAAdresse3", $obj->getEtblAAdresse3());
    }
}
