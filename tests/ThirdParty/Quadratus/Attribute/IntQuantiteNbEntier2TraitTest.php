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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntQuantiteNbEntier2Trait;

/**
 * Quantite nb entier2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntQuantiteNbEntier2TraitTest extends AbstractTestCase {

    /**
     * Tests the setQuantiteNbEntier2() method.
     *
     * @return void
     */
    public function testSetQuantiteNbEntier2() {

        $obj = new TestIntQuantiteNbEntier2Trait();

        $obj->setQuantiteNbEntier2(10);
        $this->assertEquals(10, $obj->getQuantiteNbEntier2());
    }
}
