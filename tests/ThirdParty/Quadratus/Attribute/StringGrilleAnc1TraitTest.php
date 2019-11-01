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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringGrilleAnc1Trait;

/**
 * Grille anc1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringGrilleAnc1TraitTest extends AbstractTestCase {

    /**
     * Tests the setGrilleAnc1() method.
     *
     * @return void
     */
    public function testSetGrilleAnc1() {

        $obj = new TestStringGrilleAnc1Trait();

        $obj->setGrilleAnc1("grilleAnc1");
        $this->assertEquals("grilleAnc1", $obj->getGrilleAnc1());
    }
}
