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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntCouleurActivite3Trait;

/**
 * Couleur activite3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntCouleurActivite3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCouleurActivite3() method.
     *
     * @return void
     */
    public function testSetCouleurActivite3() {

        $obj = new TestIntCouleurActivite3Trait();

        $obj->setCouleurActivite3(10);
        $this->assertEquals(10, $obj->getCouleurActivite3());
    }
}
