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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereTab1Trait;

/**
 * Lib critere tab1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereTab1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereTab1() method.
     *
     * @return void
     */
    public function testSetLibCritereTab1() {

        $obj = new TestStringLibCritereTab1Trait();

        $obj->setLibCritereTab1("libCritereTab1");
        $this->assertEquals("libCritereTab1", $obj->getLibCritereTab1());
    }
}
