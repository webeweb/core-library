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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtat3Trait;

/**
 * Etat3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtat3TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtat3() method.
     *
     * @return void
     */
    public function testSetEtat3() {

        $obj = new TestStringEtat3Trait();

        $obj->setEtat3("etat3");
        $this->assertEquals("etat3", $obj->getEtat3());
    }
}
