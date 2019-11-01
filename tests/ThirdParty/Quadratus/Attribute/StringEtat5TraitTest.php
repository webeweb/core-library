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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtat5Trait;

/**
 * Etat5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtat5TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtat5() method.
     *
     * @return void
     */
    public function testSetEtat5() {

        $obj = new TestStringEtat5Trait();

        $obj->setEtat5("etat5");
        $this->assertEquals("etat5", $obj->getEtat5());
    }
}
