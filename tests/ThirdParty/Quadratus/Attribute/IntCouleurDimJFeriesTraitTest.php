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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntCouleurDimJFeriesTrait;

/**
 * Couleur dim j feries trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntCouleurDimJFeriesTraitTest extends AbstractTestCase {

    /**
     * Tests the setCouleurDimJFeries() method.
     *
     * @return void
     */
    public function testSetCouleurDimJFeries() {

        $obj = new TestIntCouleurDimJFeriesTrait();

        $obj->setCouleurDimJFeries(10);
        $this->assertEquals(10, $obj->getCouleurDimJFeries());
    }
}
