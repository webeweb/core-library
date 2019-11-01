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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntCouleurActivite8Trait;

/**
 * Couleur activite8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntCouleurActivite8TraitTest extends AbstractTestCase {

    /**
     * Tests the setCouleurActivite8() method.
     *
     * @return void
     */
    public function testSetCouleurActivite8() {

        $obj = new TestIntCouleurActivite8Trait();

        $obj->setCouleurActivite8(10);
        $this->assertEquals(10, $obj->getCouleurActivite8());
    }
}
