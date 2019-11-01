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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereTab4Trait;

/**
 * Lib critere tab4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereTab4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereTab4() method.
     *
     * @return void
     */
    public function testSetLibCritereTab4() {

        $obj = new TestStringLibCritereTab4Trait();

        $obj->setLibCritereTab4("libCritereTab4");
        $this->assertEquals("libCritereTab4", $obj->getLibCritereTab4());
    }
}
