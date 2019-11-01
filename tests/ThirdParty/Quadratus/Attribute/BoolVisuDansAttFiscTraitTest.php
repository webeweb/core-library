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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolVisuDansAttFiscTrait;

/**
 * Visu dans att fisc trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolVisuDansAttFiscTraitTest extends AbstractTestCase {

    /**
     * Tests the setVisuDansAttFisc() method.
     *
     * @return void
     */
    public function testSetVisuDansAttFisc() {

        $obj = new TestBoolVisuDansAttFiscTrait();

        $obj->setVisuDansAttFisc(true);
        $this->assertEquals(true, $obj->getVisuDansAttFisc());
    }
}
