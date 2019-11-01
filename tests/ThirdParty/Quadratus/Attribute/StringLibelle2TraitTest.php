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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelle2Trait;

/**
 * Libelle2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelle2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelle2() method.
     *
     * @return void
     */
    public function testSetLibelle2() {

        $obj = new TestStringLibelle2Trait();

        $obj->setLibelle2("libelle2");
        $this->assertEquals("libelle2", $obj->getLibelle2());
    }
}
