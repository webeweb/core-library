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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritere7Trait;

/**
 * Lib critere7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritere7TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritere7() method.
     *
     * @return void
     */
    public function testSetLibCritere7() {

        $obj = new TestStringLibCritere7Trait();

        $obj->setLibCritere7("libCritere7");
        $this->assertEquals("libCritere7", $obj->getLibCritere7());
    }
}
