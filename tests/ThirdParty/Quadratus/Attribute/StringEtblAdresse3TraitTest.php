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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtblAdresse3Trait;

/**
 * Etbl adresse3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtblAdresse3TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtblAdresse3() method.
     *
     * @return void
     */
    public function testSetEtblAdresse3() {

        $obj = new TestStringEtblAdresse3Trait();

        $obj->setEtblAdresse3("etblAdresse3");
        $this->assertEquals("etblAdresse3", $obj->getEtblAdresse3());
    }
}
