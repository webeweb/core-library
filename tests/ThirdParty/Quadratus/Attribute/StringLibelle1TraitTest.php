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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelle1Trait;

/**
 * Libelle1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelle1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelle1() method.
     *
     * @return void
     */
    public function testSetLibelle1() {

        $obj = new TestStringLibelle1Trait();

        $obj->setLibelle1("libelle1");
        $this->assertEquals("libelle1", $obj->getLibelle1());
    }
}
