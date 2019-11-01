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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntCouleurActivite7Trait;

/**
 * Couleur activite7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntCouleurActivite7TraitTest extends AbstractTestCase {

    /**
     * Tests the setCouleurActivite7() method.
     *
     * @return void
     */
    public function testSetCouleurActivite7() {

        $obj = new TestIntCouleurActivite7Trait();

        $obj->setCouleurActivite7(10);
        $this->assertEquals(10, $obj->getCouleurActivite7());
    }
}
