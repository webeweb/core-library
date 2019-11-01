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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereInterloc2Trait;

/**
 * Lib critere interloc2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereInterloc2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereInterloc2() method.
     *
     * @return void
     */
    public function testSetLibCritereInterloc2() {

        $obj = new TestStringLibCritereInterloc2Trait();

        $obj->setLibCritereInterloc2("libCritereInterloc2");
        $this->assertEquals("libCritereInterloc2", $obj->getLibCritereInterloc2());
    }
}
