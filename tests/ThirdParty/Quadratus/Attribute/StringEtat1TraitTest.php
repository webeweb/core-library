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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtat1Trait;

/**
 * Etat1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtat1TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtat1() method.
     *
     * @return void
     */
    public function testSetEtat1() {

        $obj = new TestStringEtat1Trait();

        $obj->setEtat1("etat1");
        $this->assertEquals("etat1", $obj->getEtat1());
    }
}
