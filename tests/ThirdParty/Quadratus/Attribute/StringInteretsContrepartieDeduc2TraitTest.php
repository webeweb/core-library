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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringInteretsContrepartieDeduc2Trait;

/**
 * Interets contrepartie deduc2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringInteretsContrepartieDeduc2TraitTest extends AbstractTestCase {

    /**
     * Tests the setInteretsContrepartieDeduc2() method.
     *
     * @return void
     */
    public function testSetInteretsContrepartieDeduc2() {

        $obj = new TestStringInteretsContrepartieDeduc2Trait();

        $obj->setInteretsContrepartieDeduc2("interetsContrepartieDeduc2");
        $this->assertEquals("interetsContrepartieDeduc2", $obj->getInteretsContrepartieDeduc2());
    }
}
