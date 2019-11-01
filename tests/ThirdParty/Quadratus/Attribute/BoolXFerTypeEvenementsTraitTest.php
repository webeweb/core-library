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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolXFerTypeEvenementsTrait;

/**
 * X fer type evenements trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolXFerTypeEvenementsTraitTest extends AbstractTestCase {

    /**
     * Tests the setXFerTypeEvenements() method.
     *
     * @return void
     */
    public function testSetXFerTypeEvenements() {

        $obj = new TestBoolXFerTypeEvenementsTrait();

        $obj->setXFerTypeEvenements(true);
        $this->assertEquals(true, $obj->getXFerTypeEvenements());
    }
}
