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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntCouleurActivite4Trait;

/**
 * Couleur activite4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntCouleurActivite4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCouleurActivite4() method.
     *
     * @return void
     */
    public function testSetCouleurActivite4() {

        $obj = new TestIntCouleurActivite4Trait();

        $obj->setCouleurActivite4(10);
        $this->assertEquals(10, $obj->getCouleurActivite4());
    }
}
