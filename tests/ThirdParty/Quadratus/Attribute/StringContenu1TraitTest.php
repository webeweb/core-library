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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringContenu1Trait;

/**
 * Contenu1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringContenu1TraitTest extends AbstractTestCase {

    /**
     * Tests the setContenu1() method.
     *
     * @return void
     */
    public function testSetContenu1() {

        $obj = new TestStringContenu1Trait();

        $obj->setContenu1("contenu1");
        $this->assertEquals("contenu1", $obj->getContenu1());
    }
}
