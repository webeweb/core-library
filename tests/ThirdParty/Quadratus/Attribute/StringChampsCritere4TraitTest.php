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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritere4Trait;

/**
 * Champs critere4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritere4TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritere4() method.
     *
     * @return void
     */
    public function testSetChampsCritere4() {

        $obj = new TestStringChampsCritere4Trait();

        $obj->setChampsCritere4("champsCritere4");
        $this->assertEquals("champsCritere4", $obj->getChampsCritere4());
    }
}
