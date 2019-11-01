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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtat4Trait;

/**
 * Etat4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtat4TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtat4() method.
     *
     * @return void
     */
    public function testSetEtat4() {

        $obj = new TestStringEtat4Trait();

        $obj->setEtat4("etat4");
        $this->assertEquals("etat4", $obj->getEtat4());
    }
}
