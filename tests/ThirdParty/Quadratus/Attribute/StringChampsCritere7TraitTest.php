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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritere7Trait;

/**
 * Champs critere7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritere7TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritere7() method.
     *
     * @return void
     */
    public function testSetChampsCritere7() {

        $obj = new TestStringChampsCritere7Trait();

        $obj->setChampsCritere7("champsCritere7");
        $this->assertEquals("champsCritere7", $obj->getChampsCritere7());
    }
}
