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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereNum3Trait;

/**
 * Lib critere num3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereNum3TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereNum3() method.
     *
     * @return void
     */
    public function testSetLibCritereNum3() {

        $obj = new TestStringLibCritereNum3Trait();

        $obj->setLibCritereNum3("libCritereNum3");
        $this->assertEquals("libCritereNum3", $obj->getLibCritereNum3());
    }
}
