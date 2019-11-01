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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtat2Trait;

/**
 * Etat2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtat2TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtat2() method.
     *
     * @return void
     */
    public function testSetEtat2() {

        $obj = new TestStringEtat2Trait();

        $obj->setEtat2("etat2");
        $this->assertEquals("etat2", $obj->getEtat2());
    }
}
