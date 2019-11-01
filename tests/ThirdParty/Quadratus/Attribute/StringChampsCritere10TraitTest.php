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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritere10Trait;

/**
 * Champs critere10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritere10TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritere10() method.
     *
     * @return void
     */
    public function testSetChampsCritere10() {

        $obj = new TestStringChampsCritere10Trait();

        $obj->setChampsCritere10("champsCritere10");
        $this->assertEquals("champsCritere10", $obj->getChampsCritere10());
    }
}
