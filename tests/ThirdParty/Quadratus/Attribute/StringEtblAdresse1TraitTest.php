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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtblAdresse1Trait;

/**
 * Etbl adresse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtblAdresse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtblAdresse1() method.
     *
     * @return void
     */
    public function testSetEtblAdresse1() {

        $obj = new TestStringEtblAdresse1Trait();

        $obj->setEtblAdresse1("etblAdresse1");
        $this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
    }
}
