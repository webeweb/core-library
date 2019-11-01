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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereTab5Trait;

/**
 * Lib critere tab5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereTab5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereTab5() method.
     *
     * @return void
     */
    public function testSetLibCritereTab5() {

        $obj = new TestStringLibCritereTab5Trait();

        $obj->setLibCritereTab5("libCritereTab5");
        $this->assertEquals("libCritereTab5", $obj->getLibCritereTab5());
    }
}
