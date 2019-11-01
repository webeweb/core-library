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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritere9Trait;

/**
 * Lib critere9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritere9TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritere9() method.
     *
     * @return void
     */
    public function testSetLibCritere9() {

        $obj = new TestStringLibCritere9Trait();

        $obj->setLibCritere9("libCritere9");
        $this->assertEquals("libCritere9", $obj->getLibCritere9());
    }
}
