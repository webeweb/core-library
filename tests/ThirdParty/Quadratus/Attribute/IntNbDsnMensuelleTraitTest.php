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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbDsnMensuelleTrait;

/**
 * Nb d s n mensuelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbDsnMensuelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbDsnMensuelle() method.
     *
     * @return void
     */
    public function testSetNbDsnMensuelle() {

        $obj = new TestIntNbDsnMensuelleTrait();

        $obj->setNbDsnMensuelle(10);
        $this->assertEquals(10, $obj->getNbDsnMensuelle());
    }
}
