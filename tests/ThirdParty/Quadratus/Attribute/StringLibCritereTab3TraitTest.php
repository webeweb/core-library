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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereTab3Trait;

/**
 * Lib critere tab3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereTab3TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereTab3() method.
     *
     * @return void
     */
    public function testSetLibCritereTab3() {

        $obj = new TestStringLibCritereTab3Trait();

        $obj->setLibCritereTab3("libCritereTab3");
        $this->assertEquals("libCritereTab3", $obj->getLibCritereTab3());
    }
}
