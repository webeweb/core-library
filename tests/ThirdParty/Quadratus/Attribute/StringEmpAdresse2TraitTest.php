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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEmpAdresse2Trait;

/**
 * Emp adresse2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEmpAdresse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setEmpAdresse2() method.
     *
     * @return void
     */
    public function testSetEmpAdresse2() {

        $obj = new TestStringEmpAdresse2Trait();

        $obj->setEmpAdresse2("empAdresse2");
        $this->assertEquals("empAdresse2", $obj->getEmpAdresse2());
    }
}
