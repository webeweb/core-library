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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtblAdresse2Trait;

/**
 * Etbl adresse2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtblAdresse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtblAdresse2() method.
     *
     * @return void
     */
    public function testSetEtblAdresse2() {

        $obj = new TestStringEtblAdresse2Trait();

        $obj->setEtblAdresse2("etblAdresse2");
        $this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
    }
}
