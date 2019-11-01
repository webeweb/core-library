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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolVisuEvenementsTrait;

/**
 * Visu evenements trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolVisuEvenementsTraitTest extends AbstractTestCase {

    /**
     * Tests the setVisuEvenements() method.
     *
     * @return void
     */
    public function testSetVisuEvenements() {

        $obj = new TestBoolVisuEvenementsTrait();

        $obj->setVisuEvenements(true);
        $this->assertEquals(true, $obj->getVisuEvenements());
    }
}
