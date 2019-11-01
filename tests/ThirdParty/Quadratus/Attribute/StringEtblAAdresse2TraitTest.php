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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtblAAdresse2Trait;

/**
 * Etbl a adresse2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtblAAdresse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtblAAdresse2() method.
     *
     * @return void
     */
    public function testSetEtblAAdresse2() {

        $obj = new TestStringEtblAAdresse2Trait();

        $obj->setEtblAAdresse2("etblAAdresse2");
        $this->assertEquals("etblAAdresse2", $obj->getEtblAAdresse2());
    }
}
