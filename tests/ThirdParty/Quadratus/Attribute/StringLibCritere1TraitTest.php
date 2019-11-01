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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritere1Trait;

/**
 * Lib critere1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritere1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritere1() method.
     *
     * @return void
     */
    public function testSetLibCritere1() {

        $obj = new TestStringLibCritere1Trait();

        $obj->setLibCritere1("libCritere1");
        $this->assertEquals("libCritere1", $obj->getLibCritere1());
    }
}
