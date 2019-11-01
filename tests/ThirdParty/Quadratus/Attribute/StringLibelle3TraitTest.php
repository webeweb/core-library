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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelle3Trait;

/**
 * Libelle3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelle3TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelle3() method.
     *
     * @return void
     */
    public function testSetLibelle3() {

        $obj = new TestStringLibelle3Trait();

        $obj->setLibelle3("libelle3");
        $this->assertEquals("libelle3", $obj->getLibelle3());
    }
}
